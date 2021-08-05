<template>
  <div class="sec1">
    <b-button v-b-toggle.collapse-2 class="m-1" variant="primary">+</b-button>
    <br>年度：令和3年度上期（2021/07/01~2021/11/31）<br>被評価者：ビズ　太郎
    <b-collapse id="collapse-2" border="none">
      <b-card>
        <div class="content">
          <b-img src="/images/user.svg" width="100px"></b-img>
          <div class="shosai">
            <p>評価者：ビズ　一郎（リーダー）、ビズ　次郎（課長）</p>
            <p>状態：目標設定</p>
          </div>
        </div>
      </b-card>
    </b-collapse>
  </div>
</template>

<script>
  export default {
    name: 'profile',
    data() {
      return {
        visible: true
      }
    }
  }
</script>

<style>
.sec1{
  margin: 30px;
  border : thick double #32a1ce;
  padding: 10px;
  width: 80rem;
}

 .content {
   display: flex;
 }
 
.shosai {
  margin-left:20px;
}

</style>
