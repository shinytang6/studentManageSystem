# 学籍管理系统（数据库大作业）
## 基本功能
### 学生界面
* 显示学生个人基本信息

* 显示专业的相关联系人以及联系方式

* 显示当前学期所选课程

* 查询成绩

* 修改个人信息

* 退出登录

### 教师界面
* 显示教师个人基本信息

* 查询所开课程以及选课学生

* 提交学生课程成绩

* 修改个人信息

* 退出登录

### 管理员界面
* 添加、修改、删除、查询学院信息

* 添加、修改、删除、查询教师信息

* 添加、修改、删除、查询学生信息

* 退出登录

 
## 数据库导入

1.新建一个数据库，名字任意（例如创建数据库db2）

2.找到下载到本地的  ```db_bighw.sql```

3.在已配置好环境变量的情况下，在命令行中输入 ```mysqldump -u root -p db2<db_bighw.sql的路径```

## 运行环境
1 . 在本地配置好Apache服务器，并在服务器上配置MySQL和PHP(或者直接使用购买的云服务器)

2 . 将整个文件放入主机根目录

3 . 初始化(自行添加请直接修改数据库)
  
   * 默认学生: ```Tang```,密码: ```123```
   * 默认教师: ```tl```，密码: ```123```
   * 默认管理员: ```adm```,密码: ```123```

