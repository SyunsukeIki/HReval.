<template>
    <div>
        <div class="achievement">
            <achievement v-for="item in achievements" :key="item.id" :phase="item.phase" :collapse_id="item.id" 
                         @edit-event="openEditModal"
            />
        </div>
        <div class="button">
            <b-button variant="info" @click="openModal">成果追加</b-button>
        </div>

        <b-modal id="achievement-modal" size="lg" :title="modalTitle" hide-footer>
            <h4 class="theme">行動目標</h4>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="1"><b-badge pill variant="info">項目名</b-badge></b-col>
                    <b-col cols="5"><p class="label-text">在籍年数毎に求めるもの。</p></b-col>
                </b-row>

                <b-row align-h="start">
                    <b-col cols="1"><b-badge pill variant="info">内容</b-badge></b-col>
                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                </b-row>

                <b-row align-h="start">
                    <b-col cols="1"><b-badge pill variant="info">自己評点</b-badge></b-col>
                    <b-col cols="3">
                        <div>
                            <b-form-select v-model="selected" :options="options"></b-form-select>
                            <div class="mt-3">Selected: <strong>{{ selected }}</strong></div>
                        </div>
                    </b-col>
                    <b-col cols="2"><b-badge pill variant="info">成果物ファイル</b-badge></b-col>
                    <b-col cols="5">
                        <template>
                            <div>
                                <b-form-file
                                v-model="file1"
                                :state="Boolean(file1)"
                                placeholder="ファイルを選択"
                                drop-placeholder="Drop file here..."
                                ></b-form-file>
                                <div class="mt-3">Selected file: {{ file1 ? file1.name : '' }}</div>
                            </div>
                        </template>
                    </b-col>
                    <b-col cols="1"><b-icon icon="file-earmark-text"></b-icon></b-col>
                </b-row>

                <div class="comment">
                    <b-badge pill variant="info">自己コメント</b-badge>
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

            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="1"><b-badge pill variant="info">項目名</b-badge></b-col>
                    <b-col cols="5"><p class="label-text">チームに貢献する。</p></b-col>
                </b-row>

                <b-row align-h="start">
                    <b-col cols="1"><b-badge pill variant="info">内容</b-badge></b-col>
                    <b-col cols="5"><p class="label-text">コミュニケーションを多くとる。</p></b-col>
                </b-row>

                <b-row align-h="start">
                    <b-col cols="1"><b-badge pill variant="info">自己評点</b-badge></b-col>
                    <b-col cols="3">
                        <div>
                            <b-form-select v-model="selected" :options="options"></b-form-select>
                            <div class="mt-3">Selected: <strong>{{ selected }}</strong></div>
                        </div>
                    </b-col>
                    <b-col cols="2"><b-badge pill variant="info">成果物ファイル</b-badge></b-col>
                    <b-col cols="5">
                        <template>
                            <div>
                                <b-form-file
                                v-model="file1"
                                :state="Boolean(file1)"
                                placeholder="Choose a file or drop it here..."
                                drop-placeholder="Drop file here..."
                                ></b-form-file>
                                <div class="mt-3">Selected file: {{ file1 ? file1.name : '' }}</div>
                            </div>
                        </template>
                    </b-col>
                    <b-col cols="1"><b-icon icon="file-earmark-text"></b-icon></b-col>
                </b-row>

                <div class="comment">
                    <b-badge pill variant="info">自己コメント</b-badge>
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
                    <b-col cols="1"><b-badge pill variant="info">自己評点</b-badge></b-col>
                    <b-col cols="3">
                        <div>
                            <b-form-select v-model="selected" :options="options"></b-form-select>
                            <div class="mt-3">Selected: <strong>{{ selected }}</strong></div>
                        </div>
                    </b-col>
                    <b-col cols="2"><b-badge pill variant="info">成果物ファイル</b-badge></b-col>
                    <b-col cols="5">
                        <template>
                            <div>
                                <b-form-file
                                v-model="file1"
                                :state="Boolean(file1)"
                                placeholder="ファイルを選択"
                                drop-placeholder="Drop file here..."
                                ></b-form-file>
                                <div class="mt-3">Selected file: {{ file1 ? file1.name : '' }}</div>
                            </div>
                        </template>
                    </b-col>
                    <b-col cols="1"><b-icon icon="file-earmark-text"></b-icon></b-col>
                </b-row>

                <div class="comment">
                    <b-badge pill variant="info">自己コメント</b-badge>
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
                <b-button v-b-modal.modal-lg variant="info" @click="appendAchievement">{{modalButtonLabel}}</b-button>
            </div>
        </b-modal>
    </div>
</template>


<script>
import Achievement from "./Achievement.vue"
    export default {
        name: 'achievement-form',
        components:{Achievement},
        data() {
            return {
                achievements:[
                    {id:"collapse1",phase:"中間"},
                ],
                modalTitle:"成果登録",
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
                file1: null,
                file2: null,
                text:"",
            }
        },
        methods:{
            openModal(){
                this.modalTitle="成果登録";
                this.modalButtonLabel="登録";
                if(this.achievements.length==2){
                    alert("成果は２つ以上登録できません");
                    return;
                }
                this.$bvModal.show('achievement-modal')
            },
            openEditModal(){
                this.modalTitle="成果編集";
                this.modalButtonLabel="更新";
                this.$bvModal.show('achievement-modal')
            },
            appendAchievement(){
                this.$bvModal.hide('achievement-modal');
                if(this.modalButtonLabel=="登録"){
                    this.achievements.push({id:"collapse2",phase:"最終"})
                }
                alert("成果を"+this.modalButtonLabel+"しました。");
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