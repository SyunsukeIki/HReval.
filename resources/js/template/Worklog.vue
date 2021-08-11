<template>
　　<div class="work-log">
      <b-table striped hover outlined :items="items" :fields="fields" caption-top>
        <template #table-caption>作業ログ</template>
        <template #cell(isNew)="row">
          <div>
            <b-badge variant="primary" v-if="row.value">NEW</b-badge>
          </div>
        </template>
      </b-table>
    </div>
</template>

<script>
  export default {
    name: 'worklog',
    data() {
      return {
        fields: [{ key: 'isNew', label: '' },{ key: 'date', label: '日時' }, { key: 'name', label: '名前' }, { key: 'action', label: 'アクション' }],
        items: [
          { date: '2021-07-25 14:54:30', name: '山田太郎', action: '目標設定を差し戻しました',isNew:false},
          { date: '2021-07-25 16:27:10', name: '山田太郎', action: '目標設定を承認しました',isNew:false},
          { date: '2021-07-25 17:49:21', name: '山田太郎', action: '中間成果を登録しました',isNew:false},
          { date: '2021-07-25 17:54:18', name: '山田太郎', action: '中間アドバイスをしました',isNew:false},
          { date: '2021-07-25 18:04:04', name: '中村太郎', action: '成果登録の期限を設定しました',isNew:false},
          { date: '2021-07-25 18:19:46', name: '中村太郎', action: '一次評価を登録しました',isNew:true}
        ]
      }
    }
  }

</script>

<style>
.work-log{
  margin-top:15px
}
</style>