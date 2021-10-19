<template>
  <div calss="body">
    <b-sidebar id="sidebar" title="MENU" text-variant="light" shadow backdrop>
      <div class="px-3 py-2">
        <ol>
          <li><a href="/">評価シート(仮)</a></li>
          <li><a href="#">組織図</a></li>
          <li><a href="/sheetlist">評価シート一覧</a></li>
          <li><a href="/userlist">ユーザー一覧</a></li>
          <li><a href="/aimtemplatelist">目標シートテンプレート一覧</a></li>
          <li><a href="/periodedit">評価期間設定</a></li>
        </ol>
      </div>
    </b-sidebar>
  </div>
</template>

<script>
import '../../../css/sidebar.css';

export default {
  name: 'my-sidebar',
};
</script>
