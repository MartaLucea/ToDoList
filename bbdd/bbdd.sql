DROP TABLE IF EXISTS tareas;

CREATE TABLE tareas (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo TEXT NOT NULL,
    descripcion TEXT,
    prioridad TEXT CHECK(prioridad IN ('baja', 'media', 'alta')) DEFAULT 'media',
    fecha_creacion TEXT DEFAULT CURRENT_TIMESTAMP,
    fecha_vencimiento TEXT,
    estado TEXT CHECK(estado IN ('pendiente', 'en progreso', 'completada')) DEFAULT 'pendiente'
);

INSERT INTO tareas (titulo, descripcion, prioridad, fecha_vencimiento, estado) VALUES
('Comprar leche', 'Comprar leche en el supermercado', 'media', '2024-06-10', 'pendiente'),
('Limpiar la casa', 'Limpiar la sala y la cocina', 'alta', '2024-06-12', 'en progreso'),
('Terminar proyecto de programación', 'Finalizar el proyecto de programación para el cliente', 'alta', '2024-06-15', 'pendiente');