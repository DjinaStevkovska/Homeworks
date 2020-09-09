<template>
<div class="container">
    <ul class="divide-y divide-gray-200">
        <li class="py-6" v-for="project in projects" :key="project.name">
            <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                <dl>
                    <dt class="sr-only">Published on</dt>
                    <dd class="text-base leading-6 font-medium text-gray-500">
                        {{ project.name}}
                    </dd>
                </dl>
                <div class="space-y-5 xl:col-span-3">
                    <div class="space-y-6">
                        <h2 class="text-2xl leading-8 font-bold tracking-tight">
                            <a class="text-gray-900" href="#">
                                {{ project.created_at}}    
                            </a></h2>
                    </div>
                </div>
            </article>
        </li>
    </ul>
<hr>
</div>
</template>

<script>
export default {
        props: ['name', 'description', 'created_at'],

        data() {
            return {
                thecardtitle: 'Child Component!',
                thecardbody: 'I\'m just a child.'
            }
        }
    }
        // ['name', 'description', 'created_at'],


</script>