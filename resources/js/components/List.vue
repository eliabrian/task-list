<template>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{task.name}}
    <button class="btn btn-danger" v-on:click="deleteTask">Delete</button>
  </li>
</template>

<script>
export default {
  props: ["tasks"],
  mounted() {},
  data: function() {
    return {
      task: {
        id: this.tasks.id,
        name: this.tasks.task
      }
    };
  },

  methods: {
    deleteTask() {
      axios.delete("/tasks/" + this.task.id).then(response => {
        console.log(response);
        if (response.status == 200) {
          window.location = "/";
        }
      });
    }
  }
};
</script>