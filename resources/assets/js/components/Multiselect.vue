<template>
  <div class="multiselect-wrapper">
    <multiselect
            v-model="values"
            v-bind:options="options"
            :label="label"
            track-by="id"
            :multiple="true"
            :taggable="true"
            :show-labels="false"
            :searchable="false"
            :close-on-select=closeOnSelect
            @select="select"
            @remove="remove"
            placeholder=""
            :custom-label="customLabel">
    </multiselect>
    <input :name="name" type="hidden" :value="innerValues.toString()">
  </div>
</template>

<script>
  import Multiselect from 'vue-multiselect'

  window.multiselect = this;

  export default {
      components: { Multiselect },
      props: {
        name: String,
        value: String,
        options: Array,
        closeOnSelect: Boolean,
        label: String,
        translated: String
      },
      data () {
          var values = null;
          var innerValues = [];
          if (this.value) {
              this.value = this.value.split(',');
              innerValues = this.value;
            values = [];
            for (var i = 0; i < this.value.length; i++) {
              for (var j = 0; j < this.options.length; j++) {
                if (this.value[i] == this.options[j].id) {
                  values.push(this.options[j]);
                  break;
                }
              }
            }

          }
        return {
            values: values,
            innerValues: innerValues
        }
      },
      methods: {
          select(selectedOption, id) {
              this.innerValues.push(selectedOption.id);
          },
          remove(removedOption, id){
              console.log(removedOption.id);
              for( var i = 0; i < this.innerValues.length; i++){
                  if ( this.innerValues[i] == removedOption.id) {
                      console.log("Remove option="+this.innerValues[i]);
                      this.innerValues.splice(i, 1);
                  }
              }
              console.log(this.innerValues);
          },
        customLabel(obj, label){
          return this.$t(label + '.' + obj.name);
        }

      }
  }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style scoped>

</style>