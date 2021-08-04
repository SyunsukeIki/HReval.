<template>
  <article>
    <my-header/>

    <section>
      <form class="form-box">
        <h2>目標管理システム</h2>
        <div class="form-group">
          <label for="exampleInputEmail1">ログインID</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="LoginID">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">パスワード</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">ログイン情報を保存</label>
        </div>
        <button type="submit" class="btn btn-primary">ログイン</button>
        <p>パスワードをお忘れの方は</p><a href="/">こちら</a>
      </form>
    </section>
  </article>
</template>

<script>
import '../css/page.css';
import MyHeader from './Header.vue';

export default {
  name: 'my-page',

  components: { MyHeader },

  props: {
    user: {
      type: Object,
    },
  },

  methods: {
    onLogin() {
      this.$emit('onLogin');
    },
    onLogout() {
      this.$emit('onLogout');
    },
    onCreateAccount() {
      this.$emit('onCreateAccount');
    },
  },
};
</script>
