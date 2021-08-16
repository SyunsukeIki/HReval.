<template>
　　<div>
      <div v-if="this.windowSize < 800">
        <b-dropdown id="dropdown-1" text="目標" class="m-md-2">
          <b-dropdown-item active>目標</b-dropdown-item>
          <b-dropdown-item>目標方針</b-dropdown-item>
          <b-dropdown-item>中間面談</b-dropdown-item>
          <b-dropdown-item >成果</b-dropdown-item>
          <b-dropdown-item >評価</b-dropdown-item>
          <b-dropdown-item >作業ログ</b-dropdown-item>
          <b-dropdown-divider></b-dropdown-divider>
          <b-dropdown-item >設定</b-dropdown-item>
        </b-dropdown>
      </div>
      <div　v-if="this.windowSize > 800">
          <b-button pill variant="outline-secondary" class="nav-btn" @click="evalutionSheetEvent">目標</b-button>
          <b-button pill variant="outline-secondary"class="nav-btn" @click="policyEvent">目標方針</b-button>
          <b-button pill variant="outline-secondary"class="nav-btn" @click="midInterviewEvent">中間面談</b-button>
          <b-button pill variant="outline-secondary"class="nav-btn">成果</b-button>
          <b-button pill variant="outline-secondary"class="nav-btn">評価</b-button>
          <b-button pill variant="outline-secondary"class="nav-btn" @click="worklogEvent">作業ログ</b-button>
          <b-button pill variant="outline-secondary"class="nav-btn">設定</b-button>
      </div>
    </div>
</template>

<script>
  export default {
    name: 'nav-button',
    data(){
        return{
            windowSize: 0
        }
    },
    created(){
        this.windowSize = window.innerWidth
    },
    methods: {
      worklogEvent() {
        this.$emit('worklog-event')
      },
      policyEvent() {
        this.$emit('policy-event')
      },
      evalutionSheetEvent() {
        this.$emit('evalution-sheet-event')
      },
      midInterviewEvent() {
        this.$emit('mid-interview-event')
      },
    }
  }

</script>

<style>
  .nav-btn {
    width: 100px;
  }

</style>