import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { DaskBoardModule } from './daskBoard/daskBoard.module';
import { CoreModule } from './core/core.module';
import { LoginModule } from './login/login.module';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';



@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    DaskBoardModule,
    HttpClientModule,
    CoreModule,
    FormsModule,
    ReactiveFormsModule,
    LoginModule,
  ],
  providers: [CoreModule],
  bootstrap: [AppComponent]
})
export class AppModule { }
