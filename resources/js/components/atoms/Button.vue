<template>
  <b-button v-b-toggle.sidebar variant="variant"><b-icon icon="list" aria-hidden="true"></b-icon></b-button>
</template>

<script>
import '../../../css/button.css';

export default {
  name: 'my-button',

  props: {
    label: {
      type: String,
    },
    variant:{
      type:String,
    }
  },

  computed: {
  },

  methods: {
    onClick() {
      this.$emit('onClick');
    },
  },
};
</script>

