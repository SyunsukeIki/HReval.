<template>
    <article>
        <section>
            <h4 class="sub-heading">目標方針</h4>
            <div class="policy-text">
                <b-form-textarea v-model="text" readonly rows="3" max-rows="10" plaintext></b-form-textarea>
            </div>
        </section>
    </article>
</template >


<script>
    
    export default {
        name: 'policy',
    };
</script>
<script>
    import '../../../css/evaluation_sheet.css';
    export default {
        name: 'policy',
        data() {
            return {
                text: '前年より売上の数値を意識して目標に反映させる。'
            }
        }
    }
</script>
