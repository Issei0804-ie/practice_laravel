<template>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <label>title</label>
                <input name="title" v-model="title" type="text">
            </div>
            <div class="col-4">
                <label>body</label>
                <input name="body" v-model="body" type="text">
            </div>
            <div class="col-4">
                <button v-on:click="doAdd">追加</button>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <draggable tag="ul" :options="{group:'ITEMS'}">
                    <div v-for="item in items" :key="item.no">
                        <div class="card w-75">
                            <div class="card-body">
                                <h5 class="card-title">{{ item.name }}</h5>
                                <p class="card-text">{{item.no}}. {{ item.body }}</p>
                                <span class="del" v-on:click="doDelete(item.no-1)">[削除]</span>
                            </div>
                        </div>
                    </div>
                </draggable>
            </div>
        </div>
    </div>
</template>

<script>
import draggable from 'vuedraggable'

export default {
    name: 'todo',
    components: {
        'draggable': draggable,
    },
    data() {
        return {
            items: [
            ],
            title: "",
            body: ""
        }
    },
    computed: {
        myList: function () {
            return this.items;
        }
    },
    methods: {
        doAdd: function () {
            if (this.title === "" || this.body === ""){
                return
            }

            let no = 0;

            for (let i = 0; i < this.items.length; i++) {
                if (no < this.items[i].no) {
                    no = this.items[i].no;
                }
            }

            // itemsにアイテムを追加
            this.items.push(
                {
                    no: no + 1,
                    name: this.title,
                    body:this.body,
                    categoryNo: '5'
                }
            );

            this.title = "";
            this.body = "";

        },
        doDelete: function (index) {
            this.items.splice(index, 1);
        },
    }
}
</script>

<style scoped>
ul {
    list-style-type: none;
}

li {
    cursor: pointer;
    padding: 10px;
    border: solid #ddd 1px;
}
</style>
