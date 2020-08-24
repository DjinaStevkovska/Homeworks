<template>
    <div>
        <div class="card-header p-4 m-2">{{ header }}
            <button class="btn btn-primary float-right" @click="showInput('show')">Add New</button>
            <button class="btn btn-danger float-right" @click="showInput('hide')">Cancel</button>
        </div>

        <div class="row mx-auto" v-if="state==='show'">
            <div class="col-md-8">
                <input type="text" class="form-control" v-model="newItem" v-on:keyup.enter="saveItem">
                <p>
                    {{newItem}}

                </p>
            </div>

            <button class="col-auto btn btn-primary btn-sm" @click="saveItem">
                Save
            </button>
        </div>

        <div class="row mx-auto">
            <ul>
                <li v-for="item in items">
                    <span>{{item.label}}</span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            header: 'To Do List',
            state: 'hide',
            items: [
                { label: 'a'},
                { label: 'b'}
            ]
            
        }
        
    },

    
    methods: {
        showInput: function(stateValue)
        {
            this.state = stateValue;

        },

        saveItem: function()
        {
           console.log("saved") ;
        }
    }
    
}
</script>