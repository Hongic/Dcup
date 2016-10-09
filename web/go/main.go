package main

import (
	"fmt"
	"net/http"
)

func main() {
	ip_port := "golang:8"
	fmt.Println("监听的IP、端口：", ip_port)
	http.HandleFunc("/", Hand_ctrl)
	http.ListenAndServe(ip_port, nil)
}

//特别的URL处理
func Hand_ctrl(w http.ResponseWriter, r *http.Request) {

	fmt.Fprintln(w, "golang服务器运行成功")

}
