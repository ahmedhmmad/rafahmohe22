import{_ as c}from"./AppLayout-538410ed.js";import p from"./DeleteUserForm-83128c78.js";import l from"./LogoutOtherBrowserSessionsForm-2a13ce27.js";import{S as s}from"./SectionBorder-febe4e5a.js";import f from"./TwoFactorAuthenticationForm-934192a4.js";import u from"./UpdatePasswordForm-e8d561a6.js";import d from"./UpdateProfileInformationForm-676781c7.js";import{c as _,w as n,o,a as i,d as r,b as t,e as a,F as h}from"./app-e7e444f7.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./Modal-5e9c18f5.js";import"./SectionTitle-a84c2df6.js";import"./DangerButton-10754539.js";import"./DialogModal-18d906e8.js";import"./TextInput-b29c8a31.js";import"./SecondaryButton-23ea7e8b.js";import"./ActionMessage-ae00ef6f.js";import"./PrimaryButton-cec1c6b9.js";import"./InputLabel-279c9efe.js";import"./FormSection-7c297cad.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},G={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),_(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(d,{user:e.$page.props.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{G as default};