import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import React from 'react'
import { Head } from '@inertiajs/react';


const Index = ({ auth,projects }) => {
  return (
   <AuthenticatedLayout
   user={auth.user}
      header={
        <h2 className="font-semibold text-xl leading-tight">
          Project
        </h2>
      }
   >

<Head title="Project" />

<div className="py-12">
  <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div className="p-6 text-gray-900">
        Projects
      </div>
    </div>
  </div>
</div>

   </AuthenticatedLayout> 
  )
}

export default Index