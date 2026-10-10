<?php

// ======================================================
// TALENDEV - Azure Landing Page
// Archivo único: index.php
// Autor: Victor
// ======================================================

$courses = [
    [
        "code" => "AZ-900",
        "name" => "Microsoft Azure Fundamentals",
        "description" => "Aprende los fundamentos de Cloud Computing y conoce los principales servicios de Microsoft Azure.",
        "level" => "Fundamentos",
        "duration" => "12 horas",
        "sessions" => "4 sesiones",
        "accent" => "blue"
    ],
    [
        "code" => "AZ-104",
        "name" => "Azure Administrator",
        "description" => "Administra identidades, redes, almacenamiento, máquinas virtuales y recursos empresariales en Azure.",
        "level" => "Intermedio",
        "duration" => "24 horas",
        "sessions" => "8 sesiones",
        "accent" => "green"
    ],
    [
        "code" => "AZ-305",
        "name" => "Azure Solutions Architect",
        "description" => "Diseña arquitecturas empresariales seguras, escalables y altamente disponibles sobre Microsoft Azure.",
        "level" => "Avanzado",
        "duration" => "24 horas",
        "sessions" => "8 sesiones",
        "accent" => "orange"
    ],
    [
        "code" => "AZ-400",
        "name" => "DevOps Engineer",
        "description" => "Implementa CI/CD, automatización, Infrastructure as Code y prácticas DevOps en entornos Azure.",
        "level" => "Avanzado",
        "duration" => "24 horas",
        "sessions" => "8 sesiones",
        "accent" => "purple"
    ]
];

$benefits = [
    [
        "icon" => "terminal",
        "title" => "Aprende haciendo",
        "description" => "Sesiones prácticas orientadas a escenarios reales utilizando Microsoft Azure."
    ],
    [
        "icon" => "cloud",
        "title" => "Acceso a Azure",
        "description" => "Practica directamente sobre servicios Cloud y fortalece tus habilidades técnicas."
    ],
    [
        "icon" => "award",
        "title" => "Preparación para certificaciones",
        "description" => "Contenido alineado a los objetivos oficiales de los exámenes Microsoft."
    ],
    [
        "icon" => "users",
        "title" => "Instructor MCT",
        "description" => "Formación guiada por un Microsoft Certified Trainer con experiencia profesional."
    ],
    [
        "icon" => "brain",
        "title" => "Simuladores y recursos",
        "description" => "Accede a simuladores, material complementario y recursos para reforzar tu preparación."
    ],
    [
        "icon" => "message",
        "title" => "Acompañamiento",
        "description" => "Resuelve dudas y continúa aprendiendo junto a una comunidad enfocada en tecnología."
    ]
];

$faqs = [
    [
        "question" => "¿Necesito experiencia previa en Azure?",
        "answer" => "No. Puedes comenzar con AZ-900, diseñado para personas que desean aprender Cloud Computing desde cero."
    ],
    [
        "question" => "¿Las clases son en vivo?",
        "answer" => "Sí. Las sesiones son realizadas en vivo y están enfocadas en combinar conceptos técnicos con demostraciones y prácticas."
    ],
    [
        "question" => "¿Los cursos me preparan para una certificación Microsoft?",
        "answer" => "Sí. Los cursos siguen los principales objetivos evaluados en las certificaciones oficiales de Microsoft correspondientes."
    ],
    [
        "question" => "¿Qué curso debería tomar primero?",
        "answer" => "Si estás comenzando recomendamos AZ-900. Después puedes avanzar hacia AZ-104 y posteriormente AZ-305 para desarrollar un perfil orientado a arquitectura Cloud."
    ],
    [
        "question" => "¿Puedo llevar una ruta completa?",
        "answer" => "Sí. Talendev cuenta con rutas progresivas que permiten desarrollar conocimientos desde fundamentos hasta administración y arquitectura."
    ]
];

function svgIcon($name)
{
    $icons = [

        "terminal" => '
        <svg viewBox="0 0 24 24">
            <polyline points="4 17 10 11 4 5"></polyline>
            <line x1="12" y1="19" x2="20" y2="19"></line>
        </svg>',

        "cloud" => '
        <svg viewBox="0 0 24 24">
            <path d="M17.5 19H7a5 5 0 1 1 1.4-9.8A7 7 0 0 1 22 12a7 7 0 0 1-4.5 7z"></path>
        </svg>',

        "award" => '
        <svg viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="6"></circle>
            <path d="M8.21 13.89 7 23l5-3 5 3-1.21-9.12"></path>
        </svg>',

        "users" => '
        <svg viewBox="0 0 24 24">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
        </svg>',

        "brain" => '
        <svg viewBox="0 0 24 24">
            <path d="M9.5 4A2.5 2.5 0 0 0 7 6.5V7a3 3 0 0 0-2 5.24V14a3 3 0 0 0 3 3h1"></path>
            <path d="M14.5 4A2.5 2.5 0 0 1 17 6.5V7a3 3 0 0 1 2 5.24V14a3 3 0 0 1-3 3h-1"></path>
            <path d="M9 4v16"></path>
            <path d="M15 4v16"></path>
            <path d="M9 12h6"></path>
        </svg>',

        "message" => '
        <svg viewBox="0 0 24 24">
            <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"></path>
        </svg>'
    ];

    return $icons[$name] ?? "";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description"
content="Cursos de Microsoft Azure en vivo con Talendev. Aprende Cloud Computing, administración, arquitectura y DevOps con un Microsoft Certified Trainer.">

<title>Talendev | Formación profesional en Microsoft Azure</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
rel="stylesheet">

<style>

/* ======================================================
   VARIABLES
====================================================== */

:root {

    --blue: #006FFF;
    --blue-dark: #0057CB;
    --blue-light: #E9F3FF;

    --green: #00A68B;
    --green-light: #E7F9F5;

    --orange: #FC752C;
    --orange-light: #FFF1E8;

    --purple: #7557FF;

    --dark: #0B1220;
    --dark-2: #101828;

    --text: #344054;
    --muted: #667085;

    --border: #E4E7EC;
    --soft: #F8FAFC;

    --white: #FFFFFF;

    --container: 1180px;

    --radius-sm: 12px;
    --radius: 20px;
    --radius-lg: 30px;

    --shadow:
        0 10px 40px rgba(16, 24, 40, .07);

}


/* ======================================================
   RESET
====================================================== */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: "Inter", sans-serif;
    color: var(--dark);
    background: var(--white);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
}

a {
    color: inherit;
    text-decoration: none;
}

button,
input {
    font-family: inherit;
}

svg {
    width: 22px;
    height: 22px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.container {
    width: min(var(--container), calc(100% - 40px));
    margin: auto;
}


/* ======================================================
   NAVBAR
====================================================== */

.navbar {

    height: 76px;

    position: fixed;

    top: 0;
    left: 0;
    right: 0;

    z-index: 1000;

    border-bottom: 1px solid rgba(228, 231, 236, .7);

    background: rgba(255,255,255,.88);

    backdrop-filter: blur(16px);

}

.nav-container {

    height: 100%;

    display: flex;

    align-items: center;

    justify-content: space-between;

}

.logo {

    display: flex;

    align-items: center;

    gap: 11px;

    font-weight: 800;

    font-size: 21px;

    letter-spacing: -.5px;

}

.logo-symbol {

    width: 38px;
    height: 38px;

    background: var(--blue);

    border-radius: 10px;

    display: grid;

    place-items: center;

    color: white;

    font-size: 17px;

    box-shadow: 0 5px 18px rgba(0,111,255,.25);

}

.nav-links {

    display: flex;

    align-items: center;

    gap: 34px;

}

.nav-links a {

    color: #475467;

    font-size: 14px;

    font-weight: 500;

    transition: .2s;

}

.nav-links a:hover {
    color: var(--blue);
}

.nav-cta {

    background: var(--blue);

    color: white !important;

    padding: 10px 18px;

    border-radius: 10px;

    font-weight: 600 !important;

}

.nav-cta:hover {
    background: var(--blue-dark);
}


/* ======================================================
   HERO
====================================================== */

.hero {

    min-height: 730px;

    padding-top: 145px;

    position: relative;

    overflow: hidden;

    display: flex;

    align-items: center;

    background:
        radial-gradient(circle at 78% 20%, rgba(0,111,255,.13), transparent 28%),
        radial-gradient(circle at 10% 60%, rgba(0,166,139,.08), transparent 27%),
        linear-gradient(180deg,#fff 0%,#F8FBFF 100%);

}

.hero::before {

    content: "";

    position: absolute;

    inset: 0;

    background-image:
        linear-gradient(rgba(15,23,42,.025) 1px,transparent 1px),
        linear-gradient(90deg,rgba(15,23,42,.025) 1px,transparent 1px);

    background-size: 44px 44px;

    mask-image: linear-gradient(to bottom,#000 30%,transparent 90%);

}

.hero-grid {

    position: relative;

    display: grid;

    grid-template-columns: 1.12fr .88fr;

    gap: 80px;

    align-items: center;

}

.badge {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    color: var(--blue);

    background: var(--blue-light);

    border: 1px solid #CFE4FF;

    padding: 7px 12px;

    border-radius: 100px;

    font-size: 13px;

    font-weight: 600;

    margin-bottom: 24px;

}

.badge-dot {

    width: 8px;
    height: 8px;

    background: var(--blue);

    border-radius: 50%;

}

.hero h1 {

    font-size: clamp(44px,5.4vw,70px);

    line-height: 1.04;

    letter-spacing: -3px;

    max-width: 760px;

    margin-bottom: 26px;

}

.hero h1 span {

    color: var(--blue);

}

.hero-description {

    font-size: 18px;

    color: var(--muted);

    max-width: 650px;

    margin-bottom: 34px;

}

.hero-buttons {

    display: flex;

    gap: 12px;

    flex-wrap: wrap;

}

.btn {

    border: 0;

    padding: 14px 22px;

    border-radius: 12px;

    font-weight: 600;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    transition: all .2s ease;

    cursor: pointer;

}

.btn-primary {

    background: var(--blue);

    color: white;

    box-shadow: 0 8px 22px rgba(0,111,255,.22);

}

.btn-primary:hover {

    transform: translateY(-2px);

    background: var(--blue-dark);

}

.btn-secondary {

    border: 1px solid var(--border);

    background: white;

}

.btn-secondary:hover {

    border-color: #BFC7D4;

    transform: translateY(-2px);

}

.hero-proof {

    display: flex;

    gap: 26px;

    margin-top: 38px;

    flex-wrap: wrap;

}

.proof-item {

    display: flex;

    align-items: center;

    gap: 9px;

    color: var(--muted);

    font-size: 13px;

}

.check {

    width: 22px;
    height: 22px;

    border-radius: 50%;

    background: var(--green-light);

    color: var(--green);

    display: grid;

    place-items: center;

    font-size: 12px;

    font-weight: 800;

}


/* ======================================================
   HERO CLOUD CARD
====================================================== */

.hero-visual {

    position: relative;

    height: 470px;

}

.cloud-card {

    position: absolute;

    width: 420px;

    padding: 26px;

    right: 0;
    top: 15px;

    border-radius: 24px;

    background: rgba(255,255,255,.95);

    border: 1px solid rgba(228,231,236,.9);

    box-shadow:
        0 35px 80px rgba(16,24,40,.13);

}

.cloud-card-header {

    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 28px;

}

.cloud-card-title {

    font-size: 14px;

    color: var(--muted);

}

.status {

    background: #EAFBF3;

    color: #067647;

    padding: 5px 9px;

    border-radius: 100px;

    font-size: 11px;

    font-weight: 700;

}

.azure-box {

    padding: 25px;

    border-radius: 18px;

    color: white;

    background:
        linear-gradient(135deg,#0078D4,#0050C8);

    margin-bottom: 18px;

    overflow: hidden;

    position: relative;

}

.azure-box::after {

    content: "";

    width: 120px;
    height: 120px;

    position: absolute;

    right: -35px;
    top: -35px;

    background: rgba(255,255,255,.12);

    border-radius: 50%;

}

.azure-icon {

    width: 48px;
    height: 48px;

    display: grid;

    place-items: center;

    background: rgba(255,255,255,.16);

    border-radius: 13px;

    margin-bottom: 20px;

    font-size: 25px;

}

.azure-box small {

    opacity: .8;

    font-size: 12px;

}

.azure-box h3 {

    margin-top: 2px;

    font-size: 23px;

}

.mini-grid {

    display: grid;

    grid-template-columns: repeat(2,1fr);

    gap: 12px;

}

.mini-card {

    border: 1px solid var(--border);

    padding: 16px;

    border-radius: 14px;

}

.mini-card span {

    display: block;

    font-size: 12px;

    color: var(--muted);

    margin-bottom: 3px;

}

.mini-card strong {

    font-size: 14px;

}

.floating-card {

    position: absolute;

    bottom: 34px;

    left: -26px;

    width: 210px;

    background: white;

    border-radius: 16px;

    border: 1px solid var(--border);

    box-shadow: var(--shadow);

    padding: 18px;

}

.floating-number {

    font-size: 28px;

    font-weight: 800;

    color: var(--blue);

}

.floating-card p {

    color: var(--muted);

    font-size: 12px;

}


/* ======================================================
   SECTIONS
====================================================== */

section {

    padding: 105px 0;

}

.section-heading {

    max-width: 680px;

    margin-bottom: 50px;

}

.section-label {

    color: var(--blue);

    text-transform: uppercase;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 1.4px;

    margin-bottom: 13px;

}

.section-heading h2 {

    font-size: clamp(32px,4vw,46px);

    letter-spacing: -1.8px;

    line-height: 1.12;

    margin-bottom: 14px;

}

.section-heading p {

    color: var(--muted);

    font-size: 16px;

}


/* ======================================================
   COURSES
====================================================== */

.courses {
    background: var(--white);
}

.course-grid {

    display: grid;

    grid-template-columns: repeat(4,1fr);

    gap: 18px;

}

.course-card {

    border: 1px solid var(--border);

    border-radius: 20px;

    padding: 24px;

    transition: .25s ease;

    position: relative;

    overflow: hidden;

    background: white;

}

.course-card:hover {

    transform: translateY(-6px);

    box-shadow: 0 20px 45px rgba(16,24,40,.09);

    border-color: #D0D5DD;

}

.course-color {

    position: absolute;

    height: 4px;

    left: 0;
    right: 0;
    top: 0;

}

.course-card.blue .course-color {
    background: var(--blue);
}

.course-card.green .course-color {
    background: var(--green);
}

.course-card.orange .course-color {
    background: var(--orange);
}

.course-card.purple .course-color {
    background: var(--purple);
}

.course-code {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    margin-bottom: 28px;

    min-width: 73px;

    height: 35px;

    padding: 0 11px;

    border-radius: 8px;

    font-size: 13px;

    font-weight: 800;

    background: var(--blue-light);

    color: var(--blue);

}

.course-card.green .course-code {

    background: var(--green-light);
    color: var(--green);

}

.course-card.orange .course-code {

    background: var(--orange-light);
    color: var(--orange);

}

.course-card.purple .course-code {

    background: #F1EEFF;
    color: var(--purple);

}

.course-card h3 {

    font-size: 19px;

    line-height: 1.3;

    margin-bottom: 12px;

}

.course-card > p {

    color: var(--muted);

    font-size: 13px;

    min-height: 82px;

}

.course-meta {

    border-top: 1px solid var(--border);

    margin-top: 22px;

    padding-top: 18px;

    display: flex;

    flex-direction: column;

    gap: 8px;

}

.course-meta div {

    display: flex;

    justify-content: space-between;

    font-size: 12px;

}

.course-meta span {
    color: var(--muted);
}

.course-link {

    margin-top: 22px;

    color: var(--blue);

    font-size: 13px;

    font-weight: 700;

    display: inline-flex;

    gap: 6px;

    align-items: center;

}


/* ======================================================
   LEARNING PATH
====================================================== */

.path-section {

    background: var(--dark);

    color: white;

    position: relative;

    overflow: hidden;

}

.path-section::before {

    content: "";

    position: absolute;

    width: 650px;
    height: 650px;

    border-radius: 50%;

    background: rgba(0,111,255,.18);

    filter: blur(100px);

    right: -250px;
    top: -300px;

}

.path-section .section-heading p {

    color: #98A2B3;

}

.path-section .section-label {

    color: #67A9FF;

}

.path {

    display: grid;

    grid-template-columns: repeat(3,1fr);

    gap: 18px;

    position: relative;

}

.path-card {

    padding: 29px;

    border-radius: 20px;

    background: #141D2E;

    border: 1px solid #243044;

}

.path-step {

    width: 38px;
    height: 38px;

    border-radius: 50%;

    display: grid;

    place-items: center;

    background: var(--blue);

    font-size: 13px;

    font-weight: 700;

    margin-bottom: 25px;

}

.path-card h3 {

    font-size: 21px;

    margin-bottom: 8px;

}

.path-card p {

    color: #98A2B3;

    font-size: 14px;

}

.path-code {

    margin-top: 24px;

    display: inline-flex;

    border: 1px solid #344054;

    padding: 6px 10px;

    border-radius: 8px;

    color: #B2DDFF;

    font-size: 12px;

    font-weight: 700;

}


/* ======================================================
   BENEFITS
====================================================== */

.benefits {

    background: var(--soft);

}

.benefits-grid {

    display: grid;

    grid-template-columns: repeat(3,1fr);

    gap: 18px;

}

.benefit {

    background: white;

    border: 1px solid var(--border);

    border-radius: 18px;

    padding: 26px;

}

.benefit-icon {

    width: 45px;
    height: 45px;

    display: grid;

    place-items: center;

    border-radius: 12px;

    background: var(--blue-light);

    color: var(--blue);

    margin-bottom: 18px;

}

.benefit h3 {

    font-size: 17px;

    margin-bottom: 8px;

}

.benefit p {

    font-size: 13px;

    color: var(--muted);

}


/* ======================================================
   INSTRUCTOR
====================================================== */

.instructor-grid {

    display: grid;

    grid-template-columns: .8fr 1.2fr;

    gap: 70px;

    align-items: center;

}

.instructor-image {

    min-height: 430px;

    background:
        linear-gradient(135deg,#E8F3FF,#F5F9FF);

    border-radius: 30px;

    position: relative;

    display: grid;

    place-items: center;

    overflow: hidden;

}

.instructor-placeholder {

    width: 170px;
    height: 170px;

    border-radius: 50%;

    background: var(--blue);

    display: grid;

    place-items: center;

    color: white;

    font-size: 42px;

    font-weight: 800;

    box-shadow:
        0 20px 60px rgba(0,111,255,.25);

}

.mct {

    position: absolute;

    bottom: 27px;
    left: 27px;

    right: 27px;

    background: white;

    border-radius: 15px;

    padding: 17px;

    box-shadow: var(--shadow);

}

.mct small {

    color: var(--muted);

    font-size: 11px;

}

.mct strong {

    display: block;

    font-size: 14px;

}

.instructor-content .section-label {

    margin-bottom: 10px;

}

.instructor-content h2 {

    font-size: 42px;

    letter-spacing: -1.6px;

    line-height: 1.12;

    margin-bottom: 20px;

}

.instructor-content > p {

    color: var(--muted);

    margin-bottom: 24px;

}

.instructor-list {

    display: flex;

    flex-direction: column;

    gap: 13px;

}

.instructor-list div {

    display: flex;

    align-items: center;

    gap: 11px;

    font-size: 14px;

}


/* ======================================================
   CTA
====================================================== */

.cta {

    padding-top: 20px;

    padding-bottom: 100px;

}

.cta-box {

    background:
        radial-gradient(circle at 90% 20%,rgba(255,255,255,.17),transparent 25%),
        linear-gradient(120deg,#006FFF,#0054CB);

    color: white;

    border-radius: 30px;

    padding: 70px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 50px;

    overflow: hidden;

}

.cta-content {

    max-width: 650px;

}

.cta-box h2 {

    font-size: clamp(32px,4vw,48px);

    line-height: 1.1;

    letter-spacing: -1.6px;

    margin-bottom: 15px;

}

.cta-box p {

    color: rgba(255,255,255,.8);

}

.btn-white {

    background: white;

    color: var(--blue);

    white-space: nowrap;

}

.btn-white:hover {

    transform: translateY(-2px);

}


/* ======================================================
   FAQ
====================================================== */

.faq-container {

    max-width: 820px;

}

.faq-item {

    border-bottom: 1px solid var(--border);

}

.faq-question {

    width: 100%;

    display: flex;

    align-items: center;

    justify-content: space-between;

    background: transparent;

    border: 0;

    cursor: pointer;

    padding: 24px 0;

    font-size: 16px;

    color: var(--dark);

    text-align: left;

    font-weight: 600;

}

.faq-plus {

    width: 30px;
    height: 30px;

    display: grid;

    place-items: center;

    border-radius: 50%;

    background: var(--soft);

    font-size: 20px;

    color: var(--muted);

    transition: .25s;

}

.faq-answer {

    max-height: 0;

    overflow: hidden;

    color: var(--muted);

    font-size: 14px;

    transition: max-height .3s ease;

}

.faq-answer p {

    padding-bottom: 24px;

}

.faq-item.active .faq-answer {

    max-height: 180px;

}

.faq-item.active .faq-plus {

    transform: rotate(45deg);

    background: var(--blue-light);

    color: var(--blue);

}


/* ======================================================
   FOOTER
====================================================== */

footer {

    background: #080D17;

    color: #98A2B3;

    padding: 55px 0 28px;

}

.footer-grid {

    display: flex;

    justify-content: space-between;

    align-items: flex-start;

    gap: 40px;

    padding-bottom: 45px;

}

.footer-brand {

    max-width: 380px;

}

.footer-brand .logo {

    color: white;

    margin-bottom: 14px;

}

.footer-brand p {

    font-size: 13px;

}

.footer-links {

    display: flex;

    gap: 65px;

}

.footer-column h4 {

    color: white;

    font-size: 13px;

    margin-bottom: 13px;

}

.footer-column a {

    display: block;

    font-size: 12px;

    margin-bottom: 9px;

}

.footer-column a:hover {

    color: white;

}

.footer-bottom {

    border-top: 1px solid #1D2939;

    padding-top: 25px;

    font-size: 11px;

    display: flex;

    justify-content: space-between;

}


/* ======================================================
   MOBILE
====================================================== */

@media(max-width:1050px) {

    .hero-grid {
        grid-template-columns: 1fr;
        gap: 60px;
    }

    .hero {
        padding-bottom: 90px;
    }

    .hero-content {
        max-width: 800px;
    }

    .hero-visual {
        max-width: 500px;
        width: 100%;
        margin: auto;
    }

    .course-grid {
        grid-template-columns: repeat(2,1fr);
    }

}

@media(max-width:850px) {

    .nav-links a:not(.nav-cta) {
        display: none;
    }

    section {
        padding: 80px 0;
    }

    .benefits-grid {
        grid-template-columns: repeat(2,1fr);
    }

    .path {
        grid-template-columns: 1fr;
    }

    .instructor-grid {
        grid-template-columns: 1fr;
    }

    .instructor-image {
        max-width: 520px;
    }

    .cta-box {

        padding: 50px 35px;

        flex-direction: column;

        align-items: flex-start;

    }

}

@media(max-width:620px) {

    .container {
        width: min(100% - 28px, var(--container));
    }

    .navbar {
        height: 68px;
    }

    .nav-cta {
        padding: 9px 13px;
        font-size: 12px !important;
    }

    .hero {
        padding-top: 120px;
    }

    .hero h1 {
        letter-spacing: -2px;
    }

    .hero-description {
        font-size: 16px;
    }

    .hero-buttons {
        flex-direction: column;
    }

    .btn {
        width: 100%;
    }

    .hero-visual {
        height: 400px;
    }

    .cloud-card {
        width: 100%;
    }

    .floating-card {
        left: -7px;
        bottom: 5px;
    }

    .course-grid {
        grid-template-columns: 1fr;
    }

    .course-card > p {
        min-height: 0;
    }

    .benefits-grid {
        grid-template-columns: 1fr;
    }

    .instructor-content h2 {
        font-size: 34px;
    }

    .cta-box {
        border-radius: 22px;
        padding: 40px 25px;
    }

    .footer-grid {
        flex-direction: column;
    }

    .footer-links {
        gap: 35px;
        flex-wrap: wrap;
    }

    .footer-bottom {
        flex-direction: column;
        gap: 8px;
    }

}

</style>

</head>

<body>


<!-- ====================================================
NAVBAR
==================================================== -->

<header class="navbar">

    <div class="container nav-container">

        <a href="#inicio" class="logo">

            <div class="logo-symbol">T</div>

            Talendev

        </a>

        <nav class="nav-links">

            <a href="#cursos">Cursos</a>

            <a href="#ruta">Ruta Azure</a>

            <a href="#beneficios">Metodología</a>

            <a href="#instructor">Instructor</a>

            <a href="#faq">Preguntas</a>

            <a
                href="https://wa.me/51999999999"
                target="_blank"
                class="nav-cta">
                Hablar con un asesor
            </a>

        </nav>

    </div>

</header>


<!-- ====================================================
HERO
==================================================== -->

<section class="hero" id="inicio">

    <div class="container hero-grid">

        <div class="hero-content">

            <div class="badge">

                <span class="badge-dot"></span>

                Formación especializada en Microsoft Azure

            </div>

            <h1>

                Aprende Azure.

                <br>

                Construye tu carrera

                <span>en Cloud.</span>

            </h1>

            <p class="hero-description">

                Desarrolla habilidades prácticas en Microsoft Azure
                con clases en vivo, laboratorios, simuladores y una
                ruta diseñada para llevarte desde fundamentos hasta
                arquitectura Cloud.

            </p>

            <div class="hero-buttons">

                <a href="#cursos" class="btn btn-primary">

                    Ver cursos disponibles

                    <span>→</span>

                </a>

                <a href="#ruta" class="btn btn-secondary">

                    Explorar ruta Azure

                </a>

            </div>

            <div class="hero-proof">

                <div class="proof-item">

                    <span class="check">✓</span>

                    Clases en vivo

                </div>

                <div class="proof-item">

                    <span class="check">✓</span>

                    Prácticas en Azure

                </div>

                <div class="proof-item">

                    <span class="check">✓</span>

                    Instructor MCT

                </div>

            </div>

        </div>


        <div class="hero-visual">

            <div class="cloud-card">

                <div class="cloud-card-header">

                    <div>

                        <strong>Ruta Cloud Architect</strong>

                        <div class="cloud-card-title">
                            Microsoft Azure
                        </div>

                    </div>

                    <span class="status">
                        Disponible
                    </span>

                </div>


                <div class="azure-box">

                    <div class="azure-icon">
                        ☁
                    </div>

                    <small>Especialización</small>

                    <h3>
                        Azure Cloud Architect
                    </h3>

                </div>


                <div class="mini-grid">

                    <div class="mini-card">

                        <span>Fundamentos</span>

                        <strong>AZ-900</strong>

                    </div>

                    <div class="mini-card">

                        <span>Administración</span>

                        <strong>AZ-104</strong>

                    </div>

                    <div class="mini-card">

                        <span>Arquitectura</span>

                        <strong>AZ-305</strong>

                    </div>

                    <div class="mini-card">

                        <span>Modalidad</span>

                        <strong>En vivo</strong>

                    </div>

                </div>

            </div>


            <div class="floating-card">

                <div class="floating-number">
                    3
                </div>

                <strong>
                    niveles
                </strong>

                <p>
                    Desde fundamentos hasta arquitectura empresarial.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ====================================================
COURSES
==================================================== -->

<section class="courses" id="cursos">

    <div class="container">

        <div class="section-heading">

            <div class="section-label">
                Formación Azure
            </div>

            <h2>
                Cursos diseñados para avanzar profesionalmente.
            </h2>

            <p>

                Elige el nivel que se adapte a tu experiencia y desarrolla
                habilidades alineadas al ecosistema de Microsoft Azure.

            </p>

        </div>


        <div class="course-grid">

            <?php foreach ($courses as $course): ?>

                <article class="course-card <?= htmlspecialchars($course["accent"]) ?>">

                    <div class="course-color"></div>

                    <div class="course-code">
                        <?= htmlspecialchars($course["code"]) ?>
                    </div>

                    <h3>
                        <?= htmlspecialchars($course["name"]) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($course["description"]) ?>
                    </p>


                    <div class="course-meta">

                        <div>

                            <span>Nivel</span>

                            <strong>
                                <?= htmlspecialchars($course["level"]) ?>
                            </strong>

                        </div>

                        <div>

                            <span>Duración</span>

                            <strong>
                                <?= htmlspecialchars($course["duration"]) ?>
                            </strong>

                        </div>

                        <div>

                            <span>Modalidad</span>

                            <strong>
                                En vivo
                            </strong>

                        </div>

                    </div>


                    <a
                        href="https://wa.me/51999999999?text=Hola%20Talendev,%20quisiera%20información%20sobre%20<?= urlencode($course["code"]) ?>"
                        class="course-link"
                        target="_blank">

                        Solicitar información →

                    </a>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ====================================================
LEARNING PATH
==================================================== -->

<section class="path-section" id="ruta">

    <div class="container">

        <div class="section-heading">

            <div class="section-label">
                Ruta Azure Cloud Architect
            </div>

            <h2>
                De fundamentos a arquitectura Cloud.
            </h2>

            <p>

                Una ruta progresiva para comprender Azure,
                administrar su infraestructura y finalmente
                diseñar soluciones empresariales.

            </p>

        </div>


        <div class="path">

            <div class="path-card">

                <div class="path-step">
                    01
                </div>

                <h3>
                    Comprende la nube
                </h3>

                <p>

                    Aprende servicios Cloud, modelos de consumo,
                    arquitectura Azure, seguridad, costos y gobernanza.

                </p>

                <div class="path-code">
                    AZ-900
                </div>

            </div>


            <div class="path-card">

                <div class="path-step">
                    02
                </div>

                <h3>
                    Administra Azure
                </h3>

                <p>

                    Trabaja con identidades, redes, máquinas virtuales,
                    almacenamiento, monitoreo y recursos empresariales.

                </p>

                <div class="path-code">
                    AZ-104
                </div>

            </div>


            <div class="path-card">

                <div class="path-step">
                    03
                </div>

                <h3>
                    Diseña soluciones
                </h3>

                <p>

                    Aprende a tomar decisiones de arquitectura
                    considerando disponibilidad, seguridad,
                    escalabilidad y costos.

                </p>

                <div class="path-code">
                    AZ-305
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ====================================================
BENEFITS
==================================================== -->

<section class="benefits" id="beneficios">

    <div class="container">

        <div class="section-heading">

            <div class="section-label">
                Metodología Talendev
            </div>

            <h2>
                Más que aprender teoría.
            </h2>

            <p>

                Nuestra formación combina conocimiento técnico,
                práctica y preparación profesional.

            </p>

        </div>


        <div class="benefits-grid">

            <?php foreach ($benefits as $benefit): ?>

                <div class="benefit">

                    <div class="benefit-icon">

                        <?= svgIcon($benefit["icon"]) ?>

                    </div>

                    <h3>
                        <?= htmlspecialchars($benefit["title"]) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($benefit["description"]) ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ====================================================
INSTRUCTOR
==================================================== -->

<section id="instructor">

    <div class="container instructor-grid">


        <div class="instructor-image">

            <div class="instructor-placeholder">
                VL
            </div>

            <div class="mct">

                <small>
                    Microsoft Certified Trainer
                </small>

                <strong>
                    Formación especializada en Microsoft Cloud
                </strong>

            </div>

        </div>


        <div class="instructor-content">

            <div class="section-label">
                Aprende con experiencia
            </div>

            <h2>
                Formación guiada por un Microsoft Certified Trainer.
            </h2>

            <p>

                Las sesiones son desarrolladas por
                <strong>Víctor Lliuya</strong>,
                Microsoft Certified Trainer,
                combinando contenido oficial,
                escenarios prácticos y experiencia técnica
                aplicada al entorno profesional.

            </p>


            <div class="instructor-list">

                <div>

                    <span class="check">✓</span>

                    Formación alineada al ecosistema Microsoft.

                </div>

                <div>

                    <span class="check">✓</span>

                    Demostraciones y laboratorios prácticos.

                </div>

                <div>

                    <span class="check">✓</span>

                    Preparación orientada a certificaciones.

                </div>

                <div>

                    <span class="check">✓</span>

                    Acompañamiento durante el proceso de aprendizaje.

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ====================================================
CTA
==================================================== -->

<section class="cta">

    <div class="container">

        <div class="cta-box">

            <div class="cta-content">

                <h2>
                    Empieza tu ruta profesional en Azure.
                </h2>

                <p>

                    Conoce nuestros próximos grupos,
                    opciones de matrícula y rutas de especialización.

                </p>

            </div>


            <a
                href="https://wa.me/51999999999?text=Hola%20Talendev,%20quiero%20conocer%20los%20próximos%20cursos%20de%20Azure."
                target="_blank"
                class="btn btn-white">

                Solicitar información →

            </a>

        </div>

    </div>

</section>


<!-- ====================================================
FAQ
==================================================== -->

<section id="faq">

    <div class="container">

        <div class="section-heading">

            <div class="section-label">
                Preguntas frecuentes
            </div>

            <h2>
                Resolvemos tus dudas.
            </h2>

        </div>


        <div class="faq-container">

            <?php foreach ($faqs as $faq): ?>

                <div class="faq-item">

                    <button class="faq-question">

                        <?= htmlspecialchars($faq["question"]) ?>

                        <span class="faq-plus">
                            +
                        </span>

                    </button>

                    <div class="faq-answer">

                        <p>
                            <?= htmlspecialchars($faq["answer"]) ?>
                        </p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ====================================================
FOOTER
==================================================== -->

<footer>

    <div class="container">

        <div class="footer-grid">

            <div class="footer-brand">

                <div class="logo">

                    <div class="logo-symbol">
                        T
                    </div>

                    Talendev

                </div>

                <p>

                    Formación especializada para profesionales
                    que buscan desarrollar habilidades en
                    Cloud Computing, Azure y Ciberseguridad.

                </p>

            </div>


            <div class="footer-links">

                <div class="footer-column">

                    <h4>
                        Formación
                    </h4>

                    <a href="#cursos">
                        Cursos Azure
                    </a>

                    <a href="#ruta">
                        Ruta Cloud Architect
                    </a>

                    <a href="#beneficios">
                        Metodología
                    </a>

                </div>


                <div class="footer-column">

                    <h4>
                        Talendev
                    </h4>

                    <a href="#instructor">
                        Instructor
                    </a>

                    <a href="#faq">
                        Preguntas frecuentes
                    </a>

                </div>


                <div class="footer-column">

                    <h4>
                        Síguenos
                    </h4>

                    <a
                        href="https://www.instagram.com/talendev.pe/"
                        target="_blank">
                        Instagram
                    </a>

                    <a
                        href="https://www.tiktok.com/@talendev.academy"
                        target="_blank">
                        TikTok
                    </a>

                    <a href="#">
                        LinkedIn
                    </a>

                </div>

            </div>

        </div>


        <div class="footer-bottom">

            <span>
                © <?= date("Y") ?> Talendev. Todos los derechos reservados.
            </span>

            <span>
                Cloud · Cybersecurity · Professional Training
            </span>

        </div>

    </div>

</footer>


<script>

/* ======================================================
   FAQ
====================================================== */

document.querySelectorAll(".faq-question").forEach(question => {

    question.addEventListener("click", () => {

        const item = question.parentElement;

        document.querySelectorAll(".faq-item").forEach(faq => {

            if (faq !== item) {
                faq.classList.remove("active");
            }

        });

        item.classList.toggle("active");

    });

});


/* ======================================================
   NAVBAR SHADOW
====================================================== */

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {

    if (window.scrollY > 20) {

        navbar.style.boxShadow =
            "0 5px 25px rgba(16,24,40,.06)";

    } else {

        navbar.style.boxShadow = "none";

    }

});


/* ======================================================
   SMOOTH SCROLL OFFSET
====================================================== */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function(e) {

        const targetId = this.getAttribute("href");

        if (targetId === "#") return;

        const element = document.querySelector(targetId);

        if (!element) return;

        e.preventDefault();

        const offset = 70;

        const position =
            element.getBoundingClientRect().top
            + window.scrollY
            - offset;

        window.scrollTo({
            top: position,
            behavior: "smooth"
        });

    });

});

</script>

</body>
</html>
