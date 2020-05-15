<template>
  <form @submit.prevent="addTask">
    <div class="form-group">
      <label for="task">Task</label>
      <input type="text" name="task" id="task" class="form-control" v-model="task.task" />
    </div>
    <button type="submit" class="btn btn-primary">Add Task!</button>
  </form>
</template>

<script>
export default {
  mounted() {},

  data: function() {
    return {
      task: {
        id: "",
        task: "",
        completed: false
      }
    };
  },

  methods: {
    addTask() {
      fetch("api/tasks", {
        method: "post",
        body: JSON.stringify(this.task),
        headers: {
          "content-type": "application/json"
        }
      })
        .then(res => res.json())
        .then(data => {
          this.task.task = "";
          location.reload();
        });
    }
  }
};
</script>