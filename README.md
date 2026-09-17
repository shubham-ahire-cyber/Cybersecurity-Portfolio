# 🛡️ Cybersecurity Portfolio – Shubham Ahire

Welcome to my professional cybersecurity portfolio.

This repository documents my hands-on cybersecurity projects, performed in an isolated and authorized virtual laboratory environment. It demonstrates practical skills in network assessment, vulnerability assessment, web application security, and professional security reporting.

---

## 📑 Table of Contents
- [About Me](#-about-me)
- [Portfolio Objective](#-portfolio-objective)
- [Lab Environment](#-lab-environment)
- [Tools Used](#-tools-used)
- [Completed Projects](#-completed-projects)
- [Current Project](#-current-project)
- [Repository Structure](#-repository-structure)
- [Learning Roadmap](#-learning-roadmap)
- [Contact](#-contact)
- [Disclaimer](#-disclaimer)

---

## 👨‍💻 About Me

I am an aspiring Cybersecurity Professional with a strong interest in:

- Network Security
- Vulnerability Assessment
- Penetration Testing
- Web Application Security
- Linux & Windows Security
- Security Documentation

My goal is to continuously improve my practical cybersecurity skills by building real-world lab projects and documenting every assessment professionally.

---

## 🎯 Portfolio Objective

This repository serves as a collection of cybersecurity assessments performed in my personal VMware lab.

Every project includes:

- Professional Report
- Evidence Collection
- Assessment Methodology
- Findings
- Security Recommendations

---

## 🖥️ Lab Environment

**Assessment Machine**
- Kali Linux

**Target Machines**
- Windows 10
- DVWA (Damn Vulnerable Web Application)
- Student Management System (custom web app)

**Virtualization**
- VMware Workstation

**Network**
- VMware NAT Network

---

## 🛠️ Tools Used

- Kali Linux
- Nmap
- Burp Suite
- Git & GitHub
- VMware Workstation
- Curl
- DVWA
- MariaDB / MySQL
- Apache

More tools will be added as the portfolio grows.

---

## ✅ Completed Projects

### Project 01 – Windows 10 Network Assessment
Topics Covered:
- Host Discovery
- Network Verification
- Service Enumeration
- Initial Nmap Scanning
- Network Documentation

Report: `Reports/01-Initial-Network-Assessment.md`

---

### Project 02 – Windows 10 Vulnerability Assessment
Topics Covered:
- Targeted Port Scanning
- Service Detection
- HTTP Service Investigation
- Evidence Collection
- Professional Reporting

Report: `Reports/02-Vulnerability-Assessment.md`

---

### Project 03 – DVWA Web Application Security Assessment
Topics Covered:
- SQL Injection (manual exploitation)
- Command Injection (remote command execution)
- Reflected Cross-Site Scripting (XSS)
- Professional vulnerability reporting

Reports:
- `Evidence/Vulnerability-Assessment/dvwa-sqli-test-001.md`
- `Evidence/Vulnerability-Assessment/dvwa-command-injection-001.md`
- `Evidence/Vulnerability-Assessment/dvwa-xss-reflected-001.md`

---

### Project 04 – Student Management System (Web Application)

Topics Covered:
- Full-stack web application (PHP + MySQL)
- Login system with session management
- CRUD operations (Add, View, Edit, Delete)
- Search functionality

Repository:
- `Projects/Student-Management-System/`

Security Report:
- `Evidence/Vulnerability-Assessment/student-management-sqli-login-001.md`
---

## ✅ Completed Project – Security Assessment of Student Management System

**Status:** ✅ Completed

### Vulnerabilities Found & Fixed:
| # | Vulnerability | Status |
|---|---------------|--------|
| 1 | SQL Injection (Login Bypass) | ✅ Fixed |
| 2 | Stored XSS (Add Student) | ✅ Fixed |
| 3 | Brute Force (No Rate Limiting) | ✅ Fixed |

### Reports:
- `Evidence/Vulnerability-Assessment/student-management-sqli-login-001.md`
- `Evidence/Vulnerability-Assessment/student-management-xss-add-student-001.md`
- `Evidence/Vulnerability-Assessment/student-management-brute-force-001.md`
- `Evidence/Vulnerability-Assessment/student-management-log-analysis-001.md`
