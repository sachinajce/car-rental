import { Component, OnInit } from '@angular/core';
import { student } from '../student';
import { NgForm } from '@angular/forms';
import { NewsService } from '../news.service';


@Component({
  selector: 'app-black',
  templateUrl: './black.component.html',
  styleUrls: ['./black.component.css']
})
export class BlackComponent implements OnInit {

  student= new student();
  isRegisterd=false;

  constructor(private newsService: NewsService) { }

  ngOnInit() {
  }
  register(f: NgForm){
    this.newsService.store(this.student).subscribe(
      data=>{
        // this.sucess="Registration.sucessfull";
        this.isRegisterd=true;
        console.log("Registered sucessfully");
        f.reset();
      },
      (err)=> {
        this.isRegisterd=false;
      });
  }
}
