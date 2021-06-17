import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { UsuariosService } from './services/usuarios.service';
import { AuthService } from './services/auth.service';




@NgModule({
  declarations: [],
  imports: [
    CommonModule
  ],
  providers: [UsuariosService, AuthService],
})
export class CoreModule { }
