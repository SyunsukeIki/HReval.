<template>
    <div class="memo">
        <b-modal :id=evaluator_edit_modal_id title="評価者編集" hide-footer size="lg">
            <div class="start">
                <div class="badge-space"><b-badge variant="info"><span class="badge-size">ユーザー名</span></b-badge></div>
                <h4>阿部太郎</h4>
            </div>
            <section>
                <div class="list">
                        <div>
                            <b-badge variant="info"><span class="badge-size">ユーザーリスト</span></b-badge>
                            <template>
                            <div>
                                <b-form-select v-model="selected" :options="options" :select-size="12" class="select-form" ></b-form-select>
                            </div>
                            </template>
                        </div>
                        <div class="direction">
                            <div class="button1">
                                <a href="#"><b-icon icon="arrow-right-square-fill" font-scale=2.5 variant="danger"></b-icon></a>
                            </div>
                            <div class="button2">
                                <a href="#"><b-icon icon="arrow-left-square-fill" font-scale=2.5 variant="primary"></b-icon></a>
                            </div>
                        </div>
                        <div>
                            <div class="start">
                                <b-badge variant="info"><span class="badge-size">評価者リスト</span></b-badge>
                                <b-icon icon="arrow-up-square-fill" font-scale=2 class="button3"></b-icon>
                                <b-icon icon="arrow-down-square-fill" font-scale=2 class="button3"></b-icon>
                            </div>
                                <template>
                                <div>
                                    <b-form-select v-model="selected2" :options="options2" :select-size="12" class="select-form" ></b-form-select>
                                </div>
                                </template>
                        </div>
                </div>
            </section>
            <!-- 保存ボタンの右寄せ -->
            <b-container class="bv-example-row">
                <b-row align-h="end">
                    <b-col cols="2"><b-button class="mt-1" block @click="$bvModal.hide('bv-modal-example')" variant="primary">保存</b-button></b-col>
                </b-row>
            </b-container>
        </b-modal>
    </div>
</template>

<script>
    export default {
        name: 'evaluator-edit',
        props:{
            evaluator_edit_modal_id:null,
            memo_item:null,
            memo_item_detail:null,
        },
        data() {
            return {
                fields: [{ key: 'name', label: '投稿者' },{ key: 'memo', label: 'メモ' },{ key: 'date', label: '投稿日' }],
                items: [
                    { name: '山田太郎', memo: 'ここにメモを表示', date: '20xx年xx月xx日' },
                    { name: '山田太郎', memo: 'ここにメモを表示', date: '20xx年xx月xx日' }
                ],

                text:"",

                selected: null,
                options: [
                    { value: 'a', text: '中村太郎' },
                    { value: 'b', text: '斎藤次郎' },
                    { value: 'c', text: '小室太郎' },
                    { value: 'd', text: '佐藤次郎',},
                    { value: 'e', text: '松尾奈々' },
                    { value: 'f', text: '菅圭' },
                    { value: 'g', text: '末田利信' },
                    { value: 'h', text: '山田孝之' },
                    { value: 'i', text: '大島勇気' },
                    { value: 'j', text: '田中五郎' },
                    { value: 'k', text: '三ツ島大吾' },
                    { value: 'l', text: '江頭宗助' },
                ],
                selected2: null,
                options2: [
                    { value: 'a', text: '①中村太郎' },
                    { value: 'b', text: '②斎藤次郎' },
                    { value: 'c', text: '③小室太郎' },
                ],
            }
        }
    };
</script>

<style>
.start{
    display: flex;
}
.start2{
    display: flex;
    margin-bottom: 10px;
    }
.badge-space{
    margin-right: 10px;
}
.list{
    margin-top: 10px;
    display: flex;
    justify-content: space-between;
}
.select-form{
    margin-top: 10px;
    width: 300px;
}
.click :focus{
    background: bisque;
}
.item{
    font-size: 20px;
}

.card{
    display: flex;
    flex-direction: column;
    margin-top: 10px;
    padding: 10px 50px 200px 10px;
}
.direction{
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.button1 :hover{
    color: rgb(158, 51, 51);
}
.button2 :hover{
    color: rgb(18, 18, 145);
}
.button3{
    margin-left: 10px;
    color: rgb(236, 236, 149);
}
.button3 :hover{
    color: rgb(187, 182, 108);
}
    

</style>