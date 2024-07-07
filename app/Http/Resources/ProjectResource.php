<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;


class ProjectResource extends JsonResource
{
    public static $wrap = false;

    /**
     * Transform the resource into an array.
     *
     * This method is used to transform the Project model into a JSON response.
     * It returns an array of key-value pairs that represent the project's attributes.
     *
     * @param Request $request The incoming HTTP request.
     * @return array<string, mixed> The transformed project data.
     * @example
     * ```php
     * $project = Project::find(1);
     * $projectResource = new ProjectResource($project);
     * $projectData = $projectResource->toArray(new Request());
     * $projectData would contain the transformed project data, e.g.:
     *  [
     *      'id' => 1,
     *      'name' => 'Project Name',
     *      'description' => 'Project Description',
     *      'created_at' => '2022-01-01',
     *     'due_date' => '2022-01-15',
     *      'status' => 'active',
     *      'image_path' => 'https://example.com/project-image.jpg',
     *      'createdBy' => [
     *          'id' => 1,
     *          'name' => 'John Doe',
     *         // ...
     *      ],
     *      'updatedBy' => [
     *          'id' => 2,
     *          'name' => 'Jane Doe',
     *          // ...
     *      ],
     *  ]
     * ```
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'created_at' => (new Carbon($this->created_at))->format('Y-m-d'),
            'due_date' => (new Carbon($this->due_date))->format('Y-m-d'),
            'status' => $this->status,
            'image_path' => $this->image_path && !(str_starts_with($this->image_path, 'http')) ?
                Storage::url($this->image_path) : $this->image_path,
            'createdBy' => new UserResource($this->createdBy),
            'updatedBy' => new UserResource($this->updatedBy),
        ];
    }
}
