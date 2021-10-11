<template>
        <article>
            <section>
                <h1 class="title">目標シートテンプレート<br>一覧</h1>
                <div class="buttons">
                    <div class="new-button">
                        <b-button variant="primary" href="/newaimtemplate">新規作成</b-button>
                    </div>
                    <div>
                        <b-button variant="success" href="/templatedistribution">テンプレート配布</b-button>
                    </div>
                </div>
            </section>
                <div class="sheetlist-table">
                    <b-table striped hover :items="items" :fields="fields" :current-page="currentPage" :per-page="perPage">
                        <template #cell(template)="data">
                            <div>
                                <a :href="data.item.url">{{data.item.template}}</a>
                            </div>
                        </template>
                        <template #cell(isDelete)="row">
                            <div>
                                <b-link src="#" v-if="row.value"><b-button variant="danger btn-sm">削除</b-button></b-link>
                            </div>
                        </template>            
                    </b-table>
                </div>
                <b-row>
                    <b-col sm="5" md="6" class="my-1"> 
                        <b-form-group
                        label="Per page"
                        label-for="per-page-select"
                        label-cols-sm="6"
                        label-cols-md="4"
                        label-cols-lg="3"
                        label-align-sm="right"
                        label-size="sm"
                        class="mb-0"
                        >
                            <b-form-select
                                id="per-page-select"
                                v-model="perPage"
                                :options="pageOptions"
                                size="sm"
                            ></b-form-select>
                        </b-form-group>
                    </b-col>
                    <b-col sm="7" md="6" class="my-1">
                        <b-pagination
                        v-model="currentPage"
                        :total-rows="totalRows"
                        :per-page="perPage"
                        align="fill"
                        size="sm"
                        class="my-0"
                        ></b-pagination>
                    </b-col>
                </b-row>              
        </article>


</template>

<script>
  export default {
    name: 'aimtemplate-list',
    data() {
        return {
            fields: [
            { key: 'template', label: 'テンプレート名', sortable: true},
            { key: 'creator', label: '作成者', sortable: true},
            { key: 'created_at', label: '作成日時', sortable: true },
            { key: 'isDelete', label: '', sortable: false},
            ],
            items: [
            { url:'/templatedetail', template: '一般社員用_2020', creator: '山田太郎', created_at: '2021/10/05 13:13:23', isDelete: true},
            { url:'/templatedetail', template: '一般社員用_2021', creator: '阿部太郎', created_at: '2021/10/05 12:13:23', isDelete: true  },
            { url:'/templatedetail', template: '営業社員用_2020', creator: '鵜飼太郎', created_at: '2021/10/05 11:43:23', isDelete: true  },
            { url:'/templatedetail', template: '営業社員用_2021', creator: '江田山太郎', created_at: '2021/10/05 15:43:23', isDelete: true  },
            { url:'/templatedetail', template: 'リーダー用_2020', creator: '小野太郎', created_at: '2021/10/05 09:13:53', isDelete: true },
            { url:'/templatedetail', template: 'リーダー用_2021', creator: '松尾奈々', created_at: '2021/10/05 17:13:23', isDelete: true },
            ],
            totalRows: 1,
            currentPage: 1,
            perPage: 5,
            pageOptions: [5, 10, 15, { value: 100, text: "Show a lot" }],
        }
    },

    mounted() {
      this.totalRows = this.items.length
    },
  }
</script>

<style>
section {
   display: flex;
   flex-direction: column;
}
.title{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    margin-top : 25px;
    padding:10px;
    font-size: 32px;
    color: #636363;
    line-height: 46px;
}
.buttons{
    display: flex;
    justify-content: flex-end;
}
.new-button{
    margin-right:3px;
}

.sheetlist-table {
    margin: 10px 0 15px;
    padding: 10px;
}
</style>