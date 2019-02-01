import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  
     user:any;
      check:boolean=true;

             constructor() { 
              this.user={name:'Micromanzer',
              designation:'Software Developer',
              address:'dark World',
              phone:['8113013746','7025856513','587878']
             };
             }
             togglecheck(){
               this.check=!this.check;
             }

  ngOnInit() {
  }

}
