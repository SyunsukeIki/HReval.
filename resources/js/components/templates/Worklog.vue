<template>
　　<div class="work-log">
      <b-table striped hover outlined :items="items" :fields="fields" caption-top
               :current-page="currentPage" :per-page="perPage">
        <template #table-caption>作業ログ</template>
        <template #cell(isNew)="row">
          <div>
            <b-badge variant="primary" v-if="row.value">NEW</b-badge>
          </div>
        </template>
      </b-table>
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
    </div>
</template>

<script>
  export default {
    name: 'worklog',
    data() {
      return {
        fields: [{ key: 'isNew', label: '' },{ key: 'date', label: '日時' }, { key: 'name', label: '名前' }, { key: 'action', label: 'アクション' }],
        items: [
          { date: '2021-07-25 18:19:46', name: '中村太郎', action: '一次評価を登録しました',isNew:true},
          { date: '2021-07-25 18:04:04', name: '中村太郎', action: '成果登録の期限を設定しました',isNew:false},
          { date: '2021-07-25 17:54:18', name: '山田太郎', action: '中間アドバイスをしました',isNew:false},
          { date: '2021-07-25 17:49:21', name: '山田太郎', action: '中間成果を登録しました',isNew:false},
          { date: '2021-07-25 16:27:10', name: '山田太郎', action: '目標設定を承認しました',isNew:false},
          { date: '2021-07-25 14:54:30', name: '山田太郎', action: '目標設定を差し戻しました',isNew:false},
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
.work-log{
  margin-top:15px
}
</style>