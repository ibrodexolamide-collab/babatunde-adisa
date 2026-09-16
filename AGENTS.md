# AGENTS.md

## Project

This is a professional personal portfolio website built with WordPress and a custom WordPress theme.

The project is developed locally using DDEV, Docker, WSL2, Git and GitHub.

## Main Goal

Build a modern, professional, responsive and production-ready personal portfolio website.

The website should communicate the developer's skills, services, experience and projects clearly and professionally.

It must not look like a generic AI-generated website or a basic WordPress template.

## Technology

- WordPress
- PHP
- HTML
- CSS
- JavaScript
- React only where it provides a real benefit
- DDEV
- Docker
- WSL2
- Git
- GitHub

## Project Documentation

Before starting development, read:

- docs/PROJECT-PLAN.md
- docs/DEVELOPMENT-RULES.md
- docs/TASKS.md

These documents contain the project plan, development rules and task list.

## Development Rules

1. Work on one task at a time.
2. Read the relevant project files before changing them.
3. Follow the project plan and task list.
4. Do not skip tasks without a reason.
5. Do not modify WordPress core files.
6. Do not delete WordPress core files.
7. Do not modify DDEV configuration unless the task requires it.
8. Build the portfolio as a custom WordPress theme.
9. Keep the theme code organized and maintainable.
10. Use WordPress coding standards where practical.
11. Sanitize user input.
12. Escape output.
13. Use nonces for forms and actions that require them.
14. Check user capabilities where required.
15. Never hard-code passwords, API keys, tokens or other secrets.
16. Do not introduce unnecessary plugins or dependencies.
17. Make the website responsive for mobile, tablet and desktop.
18. Consider accessibility during development.
19. Consider performance during development.
20. Do not make large unrelated changes while completing a task.

## Git Rules

- Work on the current feature branch.
- Do not change branches unless instructed.
- Do not commit unrelated changes.
- Use clear commit messages.
- Before committing, check git status.
- Review the changes before committing.

## DDEV

Use DDEV for local development and testing.

The local website is:

https://babatunde-adisa.ddev.site

Useful commands:

```bash
ddev start
ddev describe
ddev wp
ddev logs