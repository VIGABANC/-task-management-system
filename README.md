# Gestion des Tâches - Task Management System

A comprehensive task management system built with React frontend and Laravel backend, featuring role-based access control and French localization.

## 🌟 Features

### 🔐 Authentication & Authorization
- Multi-role user system (Admin, Super Admin, Division Responsible)
- Secure login with role-based access control
- User profile management

### 📋 Task Management
- Create, edit, and assign tasks to divisions
- Task status tracking (En attente, En cours, Terminée, Annulée)
- File attachment support
- Task history and audit trail

### 📊 Statistics & Analytics
- Real-time dashboard with task statistics
- Visual charts and graphs
- Division-wise performance metrics
- Task completion rate tracking

### 📅 Agenda Management
- Appointment scheduling for administrators
- Calendar view with export functionality
- PDF generation for reports

### 🏢 Division Management
- Create and manage divisions
- Assign responsible persons
- Division-specific task views

## 🛠️ Technology Stack

### Frontend
- **React 18** with Vite
- **Material-UI** for components
- **React Router** for navigation
- **Recharts** for data visualization
- **jsPDF** for PDF generation

### Backend
- **Laravel 10** PHP framework
- **MySQL** database
- **RESTful API** architecture
- **JWT** authentication

## 📦 Installation

### Prerequisites
- Node.js (v16 or higher)
- PHP 8.1 or higher
- Composer
- MySQL 5.7 or higher
- XAMPP/WAMP (for local development)

### Backend Setup

1. **Navigate to backend directory:**
   ```bash
   cd backend
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Configure environment:**
   ```bash
   cp .env.example .env
   ```
   
   Update `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=gestion_taches
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations:**
   ```bash
   php artisan migrate
   ```

6. **Seed the database:**
   ```bash
   php artisan db:seed
   ```

7. **Start the Laravel server:**
   ```bash
   php artisan serve
   ```

### Frontend Setup

1. **Navigate to frontend directory:**
   ```bash
   cd frontend
   ```

2. **Install Node.js dependencies:**
   ```bash
   npm install
   ```

3. **Start the development server:**
   ```bash
   npm run dev
   ```

## 🚀 Usage

### Accessing the Application

1. Open your browser and navigate to `http://localhost:5173`
2. Login with the provided credentials:
   - **Admin**: `admin@example.com` / `password`
   - **Super Admin**: `superadmin@example.com` / `password`
   - **Division Responsible**: `division@example.com` / `password`

### User Roles

#### 👨‍💼 Admin
- Create and manage tasks
- Assign tasks to divisions
- View statistics and reports
- Manage divisions
- Schedule appointments

#### 👑 Super Admin
- Access to all admin features
- View system-wide statistics
- Manage all divisions
- Access to governor/secretary general agenda

#### 🏢 Division Responsible
- View assigned tasks
- Update task status
- View division-specific statistics
- Access task history

## 📁 Project Structure

```
gestion_taches/
├── backend/                 # Laravel API
│   ├── app/
│   │   ├── Http/Controllers/
│   │   ├── Models/
│   │   └── Providers/
│   ├── database/
│   │   ├── migrations/
│   │   └── seeders/
│   └── routes/
├── frontend/               # React Application
│   ├── src/
│   │   ├── pages/
│   │   │   └── user/
│   │   │       ├── admin/
│   │   │       ├── superadmin/
│   │   │       └── divisionresponsable/
│   │   ├── components/
│   │   ├── context/
│   │   ├── styles/
│   │   └── utils/
│   └── public/
└── README.md
```

## 🔧 Configuration

### API Configuration
The frontend is configured to connect to the Laravel API at `http://127.0.0.1:8000/api/v1`. Update the API URL in `frontend/src/utils/api.js` if needed.

### Database Configuration
Ensure your MySQL server is running and the database `gestion_taches` is created before running migrations.

## 📊 Features in Detail

### Task Management
- **Create Tasks**: Admins can create tasks with titles, descriptions, due dates, and file attachments
- **Assign to Divisions**: Tasks can be assigned to specific divisions
- **Status Tracking**: Track task progress through different statuses
- **File Attachments**: Support for document uploads

### Statistics Dashboard
- **Overview Cards**: Display total tasks, completed tasks, active tasks, cancelled tasks, and pending tasks
- **Monthly Distribution**: Bar chart showing task distribution by month
- **Status Distribution**: Pie chart showing task status breakdown
- **Recent Tasks**: List of recent tasks with status indicators
- **Completion Rate**: Progress bar showing overall task completion rate

### Agenda Management
- **Calendar View**: Monthly calendar with appointment indicators
- **Add Appointments**: Create new appointments with details
- **Export to PDF**: Generate PDF reports for different time periods
- **Role-based Access**: Different views for different user roles

## 🌐 Localization

The application is fully localized in French, including:
- All user interface elements
- Error messages and notifications
- Status labels and descriptions
- Date and time formatting

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

For support and questions:
- Create an issue in the GitHub repository
- Contact the development team

## 🔄 Updates

Stay updated with the latest features and bug fixes by regularly pulling from the main branch.

---

**Note**: This is a development version. For production deployment, ensure proper security configurations and environment variables are set. 