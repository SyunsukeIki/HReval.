<template>
　　<div class="work-log">
      <b-table striped hover :items="items" caption-top>
        <template #table-caption>作業ログ</template>
      </b-table>
    </div>
</template>

<script>
  export default {
    name: 'worklog',
    data() {
      return {
        items: [
          { 日時: '2021-07-25 14:54:30', ユーザー名: '山田太郎', アクション: '目標設定を差し戻しました' },
          { 日時: '2021-07-25 16:27:10', ユーザー名: '山田太郎', アクション: '目標設定を承認しました' },
          { 日時: '2021-07-25 17:49:21', ユーザー名: '山田太郎', アクション: '中間成果を登録しました' },
          { 日時: '2021-07-25 17:54:18', ユーザー名: '山田太郎', アクション: '中間アドバイスをしました' },
          { 日時: '2021-07-25 18:04:04', ユーザー名: '中村太郎', アクション: '成果登録の期限を設定しました' },
          { 日時: '2021-07-25 18:19:46', ユーザー名: '中村太郎', アクション: '一次評価を登録しました' }
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