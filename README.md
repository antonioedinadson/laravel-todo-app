![home](https://github.com/antonioedinadson/laravel-todo-app/assets/47501385/eb6f688f-a1af-417a-9faa-c473d92cc50b)
![login](https://github.com/antonioedinadson/laravel-todo-app/assets/47501385/3057ba7c-7f3d-4d0d-8ea5-11d6e4de37ac)


# ENTIDADES

### USUARIOS
- UM USUARIO TEM VARIAS TAREFAS
- UM USUARIO TEM VARIAS CATEGORIAS

### TAREFAS
- UMA TAREFA TEM UM USUARIO
- UMA TAREFA TEM UMA CATEGORIA

### CATEGORIAS
- UMA CATEGORIA TEM VARIAS TAREFAS
- UMA CATEGORIA TEM UM USUARIO

### MIGRATIONS

`USUARIOS` 
- PADRÃO LAVAVEL

`TAREFAS` 
- id
- titulo
- descrição
- categoria_id
- usuario_id
- create_at
- update_at

`CATEGORIAS`
- id
- name
- cor
- usuario_id


