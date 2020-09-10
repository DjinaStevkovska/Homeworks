<template>

<div class="container">
    <list-component :parentData="projects"></list-component>

    <div class="divide-y divide-gray-200" id="app">
        <div class="flex flex-col py-2">
            <div class="min-h-0 flex items-center justify-center">
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                            for="inline-full-name">
                            Project Name:
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            id="name" 
                            name="name" 
                            type="text" 
                            v-model="projectName">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                            for="inline-full-name">
                            Project description:
                        </label>
                    </div>
                    <div class="md:w-2/3">
                            <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            id="description" 
                            name="description" 
                            type="text" 
                            v-model="projectDescription">
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-2/3">
                        <button
                            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                            @click='createProject()'>
                            Create Project
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
import ListComponent from './ListComponent'

export default {
    components: {ListComponent},

    data() {
        return {
            projectName: "",
            projectDescription: "",

            projects: [{
                name: 'test',
                description: 'lorem10lorem10lorem10',
                created_at: '2020-20-20'
            }]
        }
    },

    methods: {
        createProject: function()
        {
            var name = this.projectName;
            var description = this.projectDescription;

            if (name.length && description.length) 
            {
                this.projects.push({
                    name: name,
                    description: description,
                    created_at: new Date().toISOString().slice(0, 10)
                })

                axios.post('/', {
                    'name': name,
                    'description': description,
                })
                .then(response => {
                    alert("Succesfully created project!");
                })
                .catch(error => {
                alert(error);
                })
            } else {
                alert('Please insert values!')
            }

        },

    },

}
</script>