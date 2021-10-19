<template>
    <div>
        <b-modal :id=group_add_modal_id title="グループ追加" hide-footer size="lg">
            <div class="start" style="margin: 10px 5px 30px 5px;">
                <b-form-input placeholder="グループ名を入力" ></b-form-input>
                <b-badge variant="primary" style="margin-left: 4px;"><span class="badge-size" style="cursor: pointer;">追加</span></b-badge>
            </div>
        </b-modal>
    </div>
</template>

<script>
    export default {
        name: 'group-add',
        props:{
            group_add_modal_id:null,
            memo_item:null,
            memo_item_detail:null,
        },
        data() {
            return {
                employee: '山田　花子',
                groupkinds:["システム営業部", "プログラマ", "課長代理","主任","営業","一般社員","営業部","山田チーム","課長","サッカー部"],
                groups:["制作事業部","リーダー","デザイナー"],
                
            }

        }
    };
</script>

<style>



</style>