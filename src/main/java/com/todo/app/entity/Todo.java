package com.todo.app.entity;

import lombok.Data;

@Data //lombokのGetter・Setter自動生成のためのもの。
//本来なら↓
//public Long getId() {
//    return id;
//}
//public void setId(Long id) {
//    this.id = id;
//}

public class Todo {
	private long id;
	private String title;
	private int done_flg;
	private String time_limit;
}
