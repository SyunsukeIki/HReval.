<template>
  <header>
    <div class="wrapper">
      <h1>HReval</h1>
      <div class="content">
        <div class="section"> 
             <div>
              <b-dropdown
                split-variant="outline-light"
                variant="outline-light"
                text="MENU"
                class="m-md-2"
              >
              <b-dropdown-item href="#">プロフィール</b-dropdown-item>
              <b-dropdown-item href="#">ヘルプ</b-dropdown-item>
              <b-dropdown-item href="#">設定</b-dropdown-item>
   	          <b-dropdown-item href="#">ログアウト</b-dropdown-item>
              </b-dropdown>
	            </div>
	          
            <my-button size="small" @onClick="onLogout" label="MENU" class="menu" variant="primary"/>
            <my-sidebar />
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import '../../../css/header.css';
import MyButton from '../atoms/Button.vue';
import MySidebar from '../atoms/Sidebar.vue';

export default {
  name: 'my-header',

  components: { MyButton, MySidebar},


//ログイン中と思われるユーザーをオブジェクト型として受け取る
  props: {
    user: {
      type: Object,
    },
    
  label: {
      type: String,
    },

    variant:{
      type:String,
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
