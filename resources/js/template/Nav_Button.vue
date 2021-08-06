<template>
    <div>
        <b-button variant="outline-secondary" class="nav-btn">目標</b-button>
        <b-button variant="outline-secondary"class="nav-btn">目標方針</b-button>
        <b-button variant="outline-secondary"class="nav-btn">中間面談</b-button>
        <b-button variant="outline-secondary"class="nav-btn">成果</b-button>
        <b-button variant="outline-secondary"class="nav-btn">評価</b-button>
        <b-button variant="outline-secondary"class="nav-btn">作業ログ</b-button>
    </div>
</template>

<script>
  export default {
    name: 'nav_button',
  }

</script>

<style>
  .nav-btn {
    border-radius: 15px;
    width: 100px;
  }

</style>