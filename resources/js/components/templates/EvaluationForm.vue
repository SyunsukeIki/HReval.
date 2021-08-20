<template>
    <div>
        <div class="evaluation">
            <evaluation v-for="item in evaluations" :key="item.id" :evaluation_num="item.evaluation_num" :collapse_id="item.id" :count_sm="count_sm"
                         @edit-event="openEditModal"
            />
        </div>
        <div class="button">
            <b-button v-b-modal="'evaluation-modal'" variant="info" @click="openModal">評価登録</b-button>
        </div>

        <b-modal id="evaluation-modal" size="lg" :title="modalTitle" hide-footer>
            <h4 class="theme">行動目標</h4>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="1"><b-badge pill variant="info">項目名</b-badge></b-col>
                    <b-col cols="5"><p class="label-text">在籍年数毎に求めるもの</p></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="1"><b-badge pill variant="info">内容</b-badge></b-col>
                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="5"><b-badge pill variant="info">自己評点</b-badge><span class="label-text">3</span></b-col>
                    <b-col cols="7"><b-badge pill variant="info">成果物ファイル</b-badge><span class="label-text">報告書(田中太郎).pdf</span><b-icon icon="file-earmark-text"></b-icon></b-col>
                </b-row>
                <div class="comment">
                    <b-badge pill variant="info">自己コメント</b-badge>
                    <p class="comment-text">しっかりできていたと思う。</p>
                </div>
                <b-row align-h="start">
                    <b-col cols="2"><b-badge pill variant="info">{{ count_sm }}次評点</b-badge></b-col>
                    <b-col cols="3">
                        <div>
                            <b-form-select v-model="selected" :options="options"></b-form-select>
                            <div class="mt-3">Selected: <strong>{{ selected }}</strong></div>
                        </div>
                    </b-col>
                </b-row>
                <div class="comment">
                    <b-badge pill variant="info">{{ count_sm }}次コメント</b-badge>
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

            <h4 class="theme">数値目標</h4>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="1"><b-badge pill variant="info">項目名</b-badge></b-col>
                    <b-col cols="5"><p class="label-text">売上達成率</p></b-col>
                </b-row>
            </b-container>
            
            <div>
                <b-col><b-badge pill variant="info">尺度</b-badge></b-col>
                <b-col><p><b-table striped bordered outlined small fixed :items="items" :fields="fields"></b-table></p></b-col>
            </div>

            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="5"><b-badge pill variant="info">自己評点</b-badge><span class="label-text">3</span></b-col>
                    <b-col cols="7"><b-badge pill variant="info">成果物ファイル</b-badge><span class="label-text">報告書(田中太郎).pdf</span><b-icon icon="file-earmark-text"></b-icon></b-col>
                </b-row>

                <div class="comment">
                    <b-badge pill variant="info">自己コメント</b-badge>
                    <p class="comment-text">しっかりできていたと思う。</p>
                </div>

                <b-row align-h="start">
                    <b-col cols="2"><b-badge pill variant="info">{{ count_sm }}次評点</b-badge></b-col>
                    <b-col cols="3">
                        <div>
                            <b-form-select v-model="selected" :options="options"></b-form-select>
                            <div class="mt-3">Selected: <strong>{{ selected }}</strong></div>
                        </div>
                    </b-col>
                </b-row>

                <div class="comment">
                    <b-badge pill variant="info">{{ count_sm }}次コメント</b-badge>
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
                <b-button v-b-modal.modal-lg variant="info" @click="appendEvaluation">{{modalButtonLabel}}</b-button>
            </div>
        </b-modal>
    </div>
</template>


<script>
import Evaluation from "./Evaluation.vue"
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
                count_sm: 1,
            }
        },
        mounted : function(){
            this.count = this.evaluations.length
        },
        methods:{
            openModal(){
                this.modalTitle="評価登録";
                this.modalButtonLabel="登録";
                this.count_sm++
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
                    this.evaluations.push({id:"collapse"+this.count, evaluation_num:this.count+"次"})
                }
                alert("評価を"+this.modalButtonLabel+"しました。");
            },
        }
    };
</script>

<style>
.comment-text {
    border: 1px solid #dbdbdc;
    height: 150px;
    display: flex;
    align-items: baseline;
}

.comment {
    margin-top: 15px;
}

.evaluation-num {
    display: inline;
    border: 3px solid #7b98e3;
    color: #7b98e3;
    padding: 5px;
    border-radius:10px;
    margin-left: 20px;
}

.button {
    display:flex;
    justify-content: center;
    margin: 20px;
}
</style>