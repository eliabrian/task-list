<template>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <input type="checkbox" v-on:change="markComplete" v-bind:checked="markCheck" />
      <p class="mx-1 my-0" v-bind:class="completeState">{{task.name}}</p>
    </div>
    <button class="btn btn-sm btn-danger" v-on:click="deleteTask">
      <i class="fas fa-trash-alt"></i>
    </button>
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
        name: this.tasks.task,
        completed: this.tasks.completed
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
    },

    markComplete() {
      axios
        .patch("/tasks/" + this.task.id)
        .then(response => {
          console.log(response);
          if (response.status == 200) {
            window.location = "/";
          }
        })
        .catch(errors => {
          console.log(errors.response);
        });
    }
  },
  computed: {
    completeState() {
      return this.task.completed ? "is-completed" : "";
    },
    markCheck() {
      return this.task.completed ? "checked" : "";
    }
  }
};
</script>

<style scoped>
.is-completed {
  text-decoration: line-through;
}
</style>