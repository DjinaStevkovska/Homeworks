<template>
    <div class="container">
        <div class="card-header p-4 m-2">{{ header }}
            <button class="btn btn-primary float-right" v-if="state==='hide'" @click="showInput('show')">Add New</button>
            <button class="btn btn-danger float-right" v-if="state==='show'" @click="showInput('hide')">Cancel</button>
        </div>

        <div class="row mx-auto" v-if="state==='show'">
            <div class="col-md-8">
                <input type="text" class="form-control" v-model="newItem" id="newItem" v-on:keyup.enter="saveItem">
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
                <li class="row" v-for="item in items">
                    <span class="col-md-8">{{item.label}}</span>
                    <button class="btn btn-danger btn-sm float-right" @click="deleteItem(item)">Delete</button>                    
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "buttons-component",

    data() {
        return {
            header: 'To Do List',
            state: 'hide',
            newItem: "",
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
            this.newItem = "";
        },

        saveItem: function()
        {
           var input = this.newItem;
           this.items.push(
               {label:input}
           );
           this.newItem = "";
        },

        deleteItem: function(item)
        {
            const itemIndex = this.items.indexOf(item);
            this.items.splice(itemIndex, 1);
        }
    }

    
}
</script>