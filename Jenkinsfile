pipeline {
    agent {
        label 'php-agent'
    }
    
    stages {        
        stage('Checkout') {
            steps {
                echo '📥 Clonare cod sursă din repository...'
                checkout scm
            }
        }
        
        stage('Install Dependencies') {
            steps {
                echo '📦 Instalare dependențe Composer...'
                sh 'composer install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }
        
        stage('Code Analysis') {
            steps {
                echo '🔍 Verificare sintaxă PHP...'
                sh 'find src tests -name "*.php" -exec php -l {} \\;'
            }
        }
        
        stage('Run Tests') {
            steps {
                echo '🧪 Rulare teste PHPUnit...'
                sh './vendor/bin/phpunit --testdox --colors=never'
            }
        }
    }
    
    post {
        always {
            echo '🧹 Curățare workspace...'
            cleanWs()
        }
        success {
            echo '✅ Pipeline executat cu succes! Toate testele au trecut.'
        }
        failure {
            echo '❌ Pipeline eșuat! Verifică log-urile pentru detalii.'
        }
    }
}