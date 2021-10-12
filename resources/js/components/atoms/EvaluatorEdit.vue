<template>
    <div class="memo">
        <b-modal :id=evaluator_edit_modal_id title="評価者編集" hide-footer size="lg">
            <div class="start">
                <div class="badge-space"><b-badge variant="info"><span class="badge-size">ユーザー名</span></b-badge></div>
                <h4>阿部太郎</h4>
            </div>
            <b-badge variant="info"><span class="badge-size">ユーザーリスト</span></b-badge>
            <template>
            <div class="list">
                    <b-col cols="5">
                        <div id="scrollspy-nested" style="position:relative; height:350px; overflow-y:auto">
                        <h4 class="item">阿部太郎</h4>
                        <h4 class="item">阿部太郎</h4>
                        <h4 class="item">山田花子</h4>
                        <h4 class="item" >伊藤純一</h4>
                        <h4 class="item" >松尾奈々</h4>
                        <h4 class="item" >中村信二</h4>
                        <h4 class="item" >田中勇気</h4>
                        <h4 class="item" >阿部太郎</h4>
                        <h4 class="item" >阿部太郎</h4>
                        <h4 class="item" >山田花子</h4>
                        <h4 class="item" >浜本千賀子</h4>
                        <h4 class="item" >重松千穂美</h4>
                        <h4 class="item" >福岡次郎</h4>
                        <h4 class="item" >福岡次郎</h4>
                        </div>
                    </b-col>
                    <div class="direction">
                        <div class="button1">
                            <a href="#"><b-icon icon="arrow-right-square-fill" font-scale=2.5 variant="danger"></b-icon></a>
                        </div>
                        <div class="button2">
                            <a href="#"><b-icon icon="arrow-left-square-fill" font-scale=2.5 variant="primary"></b-icon></a>
                        </div>
                    </div>
                        <b-col cols="5" class="card">
                                <h4 class="item">①伊藤純一</h4>
                                <h4 class="item">②山田花子</h4>
                        </b-col>
            </div>
            </template>
            <!-- 登録ボタンの右寄せ -->
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
            }
        }
    };
</script>


<style>
.start{
    display: flex;
}
.badge-space{
    margin-right: 10px;
}
.list{
    margin-top: 10px;
    display: flex;
    justify-content: space-between;
}
.item{
    font-size: 20px;
}
.card{
    display: flex;
    padding-top: 5px;
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
    

</style>