import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {HeaderComponent} from './header/header.component';
import {BodyComponent } from './body/body.component';
import { BlackComponent } from './black/black.component';

const routes: Routes = [{path:"Login",component:BodyComponent},
                      {path:"Apply",component:BlackComponent}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
