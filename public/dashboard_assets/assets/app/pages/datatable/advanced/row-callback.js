"use strict";$(function(){$("#datatable-1").DataTable({responsive:true,createdRow:function createdRow(row,data,index){var column=5;var cell=$(row).children("td").eq(column);var classes=data[column]<40?"text-success font-weight-bold":"text-danger font-weight-bold";cell.addClass(classes)}})});