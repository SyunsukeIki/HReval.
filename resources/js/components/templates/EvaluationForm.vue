<template>
    <div class="eval-sheet-content">
        <div class="evaluation">
            <evaluation v-for="item in evaluations" :key="item.id" :evaluation_num="item.evaluation_num" :collapse_id="item.id" :count_sm="count_sm"
                         @edit-event="openEditModal"
            />
        </div>
        <div class="button">
            <b-button v-b-modal="'evaluation-modal'" variant="primary" @click="openModal">評価登録</b-button>
        </div>

        <b-modal id="evaluation-modal" size="lg" :title="modalTitle" hide-footer>
            <h4 class="sub-heading">行動目標</h4>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目名</span></b-badge></b-col>
                    <b-col cols="5"><p class="label-text">在籍年数毎に求めるもの</p></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目内容</span></b-badge></b-col>
                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="5"><b-badge variant="info"><span class="badge-size">自己評点</span></b-badge><span class="label-text">3</span></b-col>
                    <b-col cols="7"><b-badge variant="info"><span class="badge-size">成果物ファイル</span></b-badge><span class="label-text">報告書(田中太郎).pdf</span></b-col>
                </b-row>
                <div class="eval-comment">
                    <b-badge variant="info"><span class="badge-size">自己コメント</span></b-badge>
                    <p class="comment-text">しっかりできていたと思う。</p>
                </div>
                <b-row align-h="start">
                    <b-col><b-badge variant="info"><span class="badge-size">{{ count_sm }}次評点</span></b-badge></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="3"><b-form-select v-model="selected" :options="options"></b-form-select></b-col>
                </b-row>
                <div class="eval-comment">
                    <b-badge variant="info"><span class="badge-size">{{ count_sm }}次コメント</span></b-badge>
                    <div>
                        <b-form-textarea
                        id="textarea"
                        v-model="text"
                        placeholder="コメントを記入"
                        rows="3"
                        max-rows="6"
                        ></b-form-textarea>
                    </div>
                </div>
            </b-container>

            <hr>

            <h4 class="sub-heading">数値目標</h4>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目名</span></b-badge></b-col>
                    <b-col cols="5"><p class="label-text">売上達成率</p></b-col>
                </b-row>
            </b-container>
            <div>
                <b-col><b-badge variant="info"><span class="badge-size">尺度</span></b-badge></b-col>
                <b-col><p><b-table striped bordered outlined small fixed :items="items" :fields="fields"></b-table></p></b-col>
            </div>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="5"><b-badge variant="info"><span class="badge-size">自己評点</span></b-badge><span class="label-text">3</span></b-col>
                    <b-col cols="7"><b-badge variant="info"><span class="badge-size">成果物ファイル</span></b-badge><span class="label-text">報告書(田中太郎).pdf</span></b-col>
                </b-row>
                <div class="eval-comment">
                    <b-badge variant="info"><span class="badge-size">自己コメント</span></b-badge>
                    <p class="comment-text">しっかりできていたと思う。</p>
                </div>
                <b-row align-h="start">
                    <b-col><b-badge variant="info"><span class="badge-size">{{ count_sm }}次評点</span></b-badge></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="3"><b-form-select v-model="selected" :options="options"></b-form-select></b-col>
                </b-row>
                <div class="eval-comment">
                    <b-badge variant="info"><span class="badge-size">{{ count_sm }}次コメント</span></b-badge>
                    <div>
                        <b-form-textarea
                        id="textarea"
                        v-model="text"
                        placeholder="コメントを記入"
                        rows="3"
                        max-rows="6"
                        ></b-form-textarea>
                    </div>
                </div>
            </b-container>
            <div class="button">
                <b-button v-b-modal.modal-lg variant="primary" @click="appendEvaluation">{{modalButtonLabel}}</b-button>
            </div>
        </b-modal>
    </div>
</template>


<script>
import Evaluation from "./Evaluation.vue"
import '../../../css/evaluation_sheet.css';
    export default {
        name: 'evaluation-form',
        components:{Evaluation},
        data() {
            return {
                evaluations:[
                    {id:"collapse"+this.count, evaluation_num:"1次"},
                ],
                modalTitle:"評価登録",
                modalButtonLabel:"登録",
                selected: null,
                options: [
                    { value: null, text: '評点を選択' },
                    { value: '1', text: '1' },
                    { value: '2', text: '2' },
                    { value: '3', text: '3' },
                    { value: '4', text: '4' },
                    { value: '5', text: '5' },
                    { value: '6', text: '6' }
                ],
                fields: [{ key: 'level', label: '段階' },{ key: 'achievement', label: '達成率' }],
                items: [
                    { level: 1, achievement: '25%' },
                    { level: 2, achievement: '40%' },
                    { level: 3, achievement: '50%' },
                    { level: 4, achievement: '60%' },
                    { level: 5, achievement: '80%' },
                    { level: 6, achievement: '100%' }
                ],
                text:"",
                count: 0,
                count_sm: 0,
            }
        },
        mounted : function(){
            this.count = this.evaluations.length
            this.count_sm = this.evaluations.length + 1
        },
        methods:{
            openModal(){
                this.modalTitle="評価登録";
                this.modalButtonLabel="登録";
                this.$bvModal.show('evaluation-modal')
            },
            openEditModal(){
                this.modalTitle="評価編集";
                this.modalButtonLabel="更新";
                this.$bvModal.show('evaluation-modal')
            },
            appendEvaluation(){
                this.$bvModal.hide('evaluation-modal');
                if(this.modalButtonLabel=="登録"){
                    this.count++
                    this.count_sm++
                    this.evaluations.push({id:"collapse"+this.count, evaluation_num:this.count+"次"})
                }
                alert("評価を"+this.modalButtonLabel+"しました。");
            },
        }
    };
</script>

<style>

.button {
    display:flex;
    justify-content: center;
    margin: 20px;
}

.eval-comment {
    margin-top: 15px;
}
</style>