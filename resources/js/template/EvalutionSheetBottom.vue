<template>
    <div>
        <nav-button @worklog-event="onClickWorkLogBtn"
                    @policy-event="onClickPolicyBtn"
                    @evalution-sheet-event="onClickEvalutionSheetBtn"
                    @mid-interview-event="onClickMidInterviewBtn"
        />
        <worklog v-show="show=='worklog'"/>
        <set-target v-show="show=='evalutionsheet'"/>
        <mid-interview v-show="show=='midinterview'"/>
        <policy v-show="show=='policy'" />
    </div>
</template>

<script>

import NavButton from "./Nav_Button.vue";
import Worklog from "./Worklog.vue";
import SetTarget from "./Set_Target.vue";
import MidInterview from "./MidInterview.vue";
import Policy from "./Policy.vue"

export default {
  name: 'eval-sheet-bottom',
  components:{NavButton,Worklog,SetTarget,MidInterview,Policy},
  data () {
    return {
      show:"worklog",
      isVisibleWorkLog: true,
      isVisibleSetTarget: false,
      isVisibleMidInterview: false,
      isVisiblePolicy: false,
    }
  },
  methods: {
    onClickEvalutionSheetBtn () {
      this.show="evalutionsheet";
    },
    onClickWorkLogBtn () {
      this.show="worklog";
    },
    onClickPolicyBtn () {
      this.show="policy"
    },
    onClickMidInterviewBtn () {
      this.show="midinterview"
    },
  }
};
</script>
