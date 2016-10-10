
Dockerfile	镜像配置文件


注意： golang:1.7.1-alpine  镜像的配置

镜像默认的gopath路径  /go/
项目目录应该放在容器的 /go/src/项目名
command 命令执行  go run /go/src/项目名/main.go
