<template>
    <div>
        <nav-button @worklog-event="onClickWorkLogBtn"
                    @policy-event="onClickPolicyBtn"
                    @evalution-sheet-event="onClickEvalutionSheetBtn"
                    @mid-interview-event="onClickMidInterviewBtn"
                    @achievement-form-event="onClickAchievementFormBtn"
                    @evaluation-form-event="onClickEvaluationFormBtn"
        />
        <worklog v-show="show=='worklog'"/>
        <!-- <achievement /> -->
        <!--<evaluation /> -->
        <policy v-show="show=='policy'"/>
        <set-target v-show="show=='evalutionsheet'"/>
        <mid-interview v-show="show=='midinterview'"/>
        <achievement-form v-show="show=='achievementform'" />
        <evaluation-form v-show="show=='evaluationform'" />
    </div>
</template>

<script>

import NavButton from "./Nav_Button.vue";
import Worklog from "./Worklog.vue";
import SetTarget from "./Set_Target.vue";
import MidInterview from "./MidInterview.vue";
import Policy from "./Policy.vue";
import Achievement from "./Achievement.vue"
import Evaluation from "./Evaluation.vue"
import AchievementForm from "./AchievementForm.vue"
import EvaluationForm from "./EvaluationForm.vue"

export default {
  name: 'eval-sheet-bottom',
  components:{NavButton,Worklog,SetTarget,MidInterview,Policy,Achievement,Evaluation,AchievementForm,EvaluationForm},
  data () {
    return {
      show:"worklog",
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
    onClickAchievementFormBtn () {
      this.show="achievementform"
    },
    onClickEvaluationFormBtn () {
      this.show="evaluationform"
    },
  }
};
</script>
