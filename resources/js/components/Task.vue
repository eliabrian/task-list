<template>
  <div class="card-body">
    <ul class="list-group">
      <li
        class="list-group-item d-flex justify-content-between align-items-center"
        v-for="task in tasks"
        v-bind:key="task.id"
      >
        <div class="d-flex align-items-center">
          <input
            type="checkbox"
            v-on:change="completeTask(task.id)"
            v-bind:checked="task.completed"
          />
          <p class="mx-2 my-0">{{task.task}}</p>
        </div>
        <button class="btn btn-sm btn-danger" v-on:click="deleteTask(task.id)">
          <i class="fas fa-trash-alt"></i>
        </button>
      </li>
    </ul>
    <p v-if="tasks.length == 0" class="text-center m-0">Your task is empty.</p>
  </div>
</template>

<script>
export default {
  mounted() {
    this.fetchTasks();
  },

  data: function() {
    return {
      tasks: [],
      task: {
        id: "",
        task: "",
        completed: false
      },

      task_id: "",
      pagination: {},
      edit: false
    };
  },

  methods: {
    fetchTasks() {
      fetch("api/tasks")
        .then(res => res.json())
        .then(res => {
          console.log(res.data);
          this.tasks = res.data;
        });
    },

    deleteTask(id) {
      fetch("api/task/" + id, {
        method: "delete"
      })
        .then(res => res.json())
        .then(data => {
          this.fetchTasks();
        });
    },

    completeTask(id) {
      fetch("api/task/" + id, {
        method: "put"
      })
        .then(res => res.json())
        .then(data => {
          this.fetchTasks();
        })
        .catch(err => console.log(err));
    }
  }
};
</script>