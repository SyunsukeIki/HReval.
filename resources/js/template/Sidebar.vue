<template>
  <div calss="body">
    <b-sidebar id="sidebar" title="MENU" shadow>
      <div class="px-3 py-2">
        <ol>
          <li><a href="#">通知内容</a></li>
          <li><a href="#">組織図</a></li>
          <li><a href="#">評価シート一覧</a></li>
          <li><a href="#">月次データ</a></li>
        </ol>
      </div>
    </b-sidebar>
  </div>
</template>

<script>
import '../../css/sidebar.css';

export default {
  name: 'my-sidebar',
};
</script>
