import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  public LoginUsuarios = new FormGroup({
    email: new FormControl(''),
    clave: new FormControl(''),
  });

  constructor() { }

  ngOnInit(): void {
  }

  // tslint:disable-next-line:typedef
  onlogin() {
    console.log('formGrop');
  }
}
