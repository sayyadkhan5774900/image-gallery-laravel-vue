<template>
  <div class="mt-6">
    <!-- allow-multiple="true" -->
    <file-pond
      name="image"
      ref="pond"
      class-name="my-pond"
      label-idle="Click to Chose Image | Drop here..."
      serve="/upload"
      accepted-file-types="image/*"
      v-on:init="handleFilePondInit"
    />
  </div>
</template>

<script>
// Import FilePond
import vueFilePond from "vue-filepond";

// Import plugins
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.esm.js";
// Import styles
import "filepond/dist/filepond.min.css";

// Create FilePond component
const FilePond = vueFilePond(FilePondPluginFileValidateType);

export default {
  data() {
    return {
      message: "Hello Dear",
    };
  },
  methods: {
    handleFilePondInit: function () {
      console.log("FilePond has initialized");
      console.log("file pond object : " , this.$refs.pond);

      // example of instance method call on pond reference
      //this.$refs.pond.getFiles();
    },
  },
  components: {
    FilePond,
  },
};
</script>

