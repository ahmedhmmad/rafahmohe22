import{P as u,d as r,b as s,u as t,w as o,F as c,o as m,X as f,t as _,e as p,a,n as w,f as g,j as b}from"./app-e7e444f7.js";import{A as y}from"./AuthenticationCard-92e77612.js";import{_ as x}from"./AuthenticationCardLogo-6dc768c2.js";import{_ as h,a as k}from"./TextInput-b29c8a31.js";import{_ as V}from"./InputLabel-279c9efe.js";import{_ as v}from"./PrimaryButton-cec1c6b9.js";import"./_plugin-vue_export-helper-c27b6911.js";const F=a("div",{class:"mb-4 text-sm text-gray-600"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),N={key:0,class:"mb-4 font-medium text-sm text-green-600"},$=["onSubmit"],C={class:"flex items-center justify-end mt-4"},D={__name:"ForgotPassword",props:{status:String},setup(l){const e=u({email:""}),n=()=>{e.post(route("password.email"))};return(P,i)=>(m(),r(c,null,[s(t(f),{title:"Forgot Password"}),s(y,null,{logo:o(()=>[s(x)]),default:o(()=>[F,l.status?(m(),r("div",N,_(l.status),1)):p("",!0),a("form",{onSubmit:b(n,["prevent"])},[a("div",null,[s(V,{for:"email",value:"Email"}),s(h,{id:"email",modelValue:t(e).email,"onUpdate:modelValue":i[0]||(i[0]=d=>t(e).email=d),type:"email",class:"mt-1 block w-full",required:"",autofocus:""},null,8,["modelValue"]),s(k,{class:"mt-2",message:t(e).errors.email},null,8,["message"])]),a("div",C,[s(v,{class:w({"opacity-25":t(e).processing}),disabled:t(e).processing},{default:o(()=>[g(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],40,$)]),_:1})],64))}};export{D as default};