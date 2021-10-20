<template>
    <div class="memo">
        <b-modal :id=group_edit_modal_id title="グループ編集" hide-footer size="lg">
            <div class="start" style="margin-bottom: 20px;">
                <div class="badge-space"><b-badge variant="info"><span class="badge-size">ユーザー名</span></b-badge></div>
                <h4>{{employee}}</h4>
            </div>
            <section>
                <div>
                        <div>
                            <b-badge variant="info"><span class="badge-size">グループリスト</span></b-badge>
                            <div class="card1">
                                <b-badge :key="groupkind" v-for="groupkind in groupkinds" pill variant="success" class="badge-style"><span class="badge-size">{{groupkind}}</span></b-badge>
                                <button type="button" class="btn m-1 btn-success btn-sm rounded-pill" v-b-modal.group_add><span>＋</span></button>
                            </div>
                        </div>
                        <div>
                            <div>
                                <b-badge variant="info"><span class="badge-size">所属グループ</span></b-badge>

                            </div>
                            <div class="card1">
                                <b-badge :key="group" v-for="group in groups" pill variant="success" class="badge-style"><span class="badge-size">{{group}}</span><span class="badge-item">×</span></b-badge>                                
                            </div>
       
                        </div>
                <group-add group_add_modal_id="group_add" />
                </div>
            </section> 
            <!-- 実行ボタンの右寄せ -->
            <b-container class="bv-example-row">
                <b-row align-h="end">
                    <b-col cols="2"><b-button class="mt-1" block @click="$bvModal.hide('bv-modal-example')" variant="primary">実行</b-button></b-col>
                </b-row>
            </b-container>
        </b-modal>
    </div>
</template>

<script>
  import GroupAdd  from '../atoms/GroupAdd.vue'; 
    export default {
        name: 'group-edit',
        components: {GroupAdd},
        props:{
            group_edit_modal_id:null,
        },
        data() {
            return {
                employee: '井上　太郎',
                groupkinds:["システム営業部", "プログラマ", "課長代理","主任","営業","一般社員","営業部","山田チーム","課長","サッカー部"],
                groups:["プログラマ","リーダー"],
                
            }

        }
    };
</script>

<style>
.card1{
    border: 1px solid #dbdbdc;
    border-radius: 5px;
    padding: 5px;
    margin-bottom: 20px;
    margin-top: 2px;
}
.badge-style{
    margin: 2px;
}
.badge-item{
    margin-left:5px;
    cursor: pointer;

}


</style>